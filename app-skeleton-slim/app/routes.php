<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {

        $db = $this->get(PDO::class);
        $sth = $db->prepare("SELECT * FROM test");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        $payload = json_encode($data);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');

    });

    $app->get('/test', function (Request $request, Response $response) {
        $test = new \App\Core\TestCode();
        $payload = json_encode($test->name);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    });

    // Create Twig
    $twig = Twig::create('../templates', ['cache' => '../var/cache']);

    // Add Twig-View Middleware
    $app->add(TwigMiddleware::create($app, $twig));

    // Define named route
    $app->get('/hello/{name}', function ($request, $response, $args) {
        $view = Twig::fromRequest($request);
        return $view->render($response, 'profile.html', [
            'name' => $args['name']
        ]);
    })->setName('profile');

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
