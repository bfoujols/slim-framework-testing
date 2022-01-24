```
     _ _             _____                                            _    
 ___| (_)_ __ ___   |  ___| __ __ _ _ __ ___   _____      _____  _ __| | __
/ __| | | '_ ` _ \  | |_ | '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
\__ \ | | | | | | | |  _|| | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
|___/_|_|_| |_| |_| |_|  |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
```                                                                            
Autor : Benoit Foujols \
Website : [slimframework.com](https://www.slimframework.com/)
Add-on : [Twig-View](https://github.com/slimphp/Twig-View)
Alternative \
Add-on : [PHP-View](https://github.com/slimphp/PHP-View)

## Objectif 
Test de la framework "Slim" pour une simple route avec comme implementation Slim/PSR-7
Les prérequis sont :
- php 8.0 (CLI)
- composer 2.0
- Slim 4.9
- Twig-View 3.3

## installation
```
composer require slim/slim:"4.*"
composer require slim/psr7
composer require slim/twig-view:^3.0
mkdir var/cache
```

## demarrer le server
```
cd public/
php -S localhost:8888
```