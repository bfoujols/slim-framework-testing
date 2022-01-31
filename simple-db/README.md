```
     _ _             _____                                            _    
 ___| (_)_ __ ___   |  ___| __ __ _ _ __ ___   _____      _____  _ __| | __
/ __| | | '_ ` _ \  | |_ | '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
\__ \ | | | | | | | |  _|| | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
|___/_|_|_| |_| |_| |_|  |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
```                                                                            
Autor : Benoit Foujols \
Website : [slimframework.com](https://www.slimframework.com/)
Doc : [slim 4 Doc](https://www.slimframework.com/docs/v4/)

## Objectif
Test de la framework "Slim" pour une simple route avec comme implementation Slim/PSR-7
Les prérequis sont :
- php 8.0 (CLI)
- composer 2.0
- Slim skeleton 4.4

## installation du projet
```
composer install
```

## demarrer le server
```bash
cd simple-db
composer start
```

## Procedure d'installation à partir de zero
```bash
composer create-project slim/slim-skeleton simple-db
```
Ajoutez une base de donnée via app/settings.php
```
    "db" => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'username' => 'root',
            'database' => 'slim_test',
        'password' => '***',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'flags' => [
            // Turn off persistent connections
            PDO::ATTR_PERSISTENT => false,
            // Enable exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Emulate prepared statements
            PDO::ATTR_EMULATE_PREPARES => true,
            // Set default fetch mode to array
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ],
    ],
```
Ajoutez les settings via app/dependencies.php
```
    PDO::class => function (ContainerInterface $c) {

        $settings = $c->get(SettingsInterface::class);

        $dbSettings = $settings->get('db');

        $host = $dbSettings['host'];
        $dbname = $dbSettings['database'];
        $username = $dbSettings['username'];
        $password = $dbSettings['password'];
        $charset = $dbSettings['charset'];
        $flags = $dbSettings['flags'];
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        return new PDO($dsn, $username, $password);
    },
```

---
## Docker

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd simple-db
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

---
## Testing

```bash
composer test
```

