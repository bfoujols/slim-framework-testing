```
     _ _             _____                                            _    
 ___| (_)_ __ ___   |  ___| __ __ _ _ __ ___   _____      _____  _ __| | __
/ __| | | '_ ` _ \  | |_ | '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
\__ \ | | | | | | | |  _|| | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
|___/_|_|_| |_| |_| |_|  |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
```                                                                            
Autor : Benoit Foujols \
Website : [slimframework.com](https://www.slimframework.com/)

## Objectif 
Test de la framework "Slim" pour une simple route avec comme implementation Slim/PSR-7
Les prérequis sont :
- php 8.0 (CLI)
- composer 2.0
- Slim 4.9

## installation du projet
```
composer install
```

## demarrer le server
```
cd public/
php -S localhost:8888
```

## Procedure d'installation à partir de zero
```
composer require slim/slim:"4.*"
composer require slim/psr7
```