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

# Projet Slim/db/template
L'objectif est de fournir aux étudiants un support complet pour dev leurs projets de fin de premiere année.

## Objectif
Test de la framework "Slim" pour une simple route avec comme implementation Slim/PSR-7
Les prérequis sont :
- php 8.0 (CLI)
- composer 2.0
- Slim skeleton 4.4
- PDO Mysql + Mysql

## Installation du projet
```
cd app-skeleton-slim
composer install
cd app
cp exemple.env .env
```
[X] Remplacez les variables d'env par la configuration

## Demarrer le server
```bash
cd app-skeleton-slim
composer start
```

## Procedure d'installation à partir de zero
```bash
composer create-project slim/slim-skeleton app-skeleton-slim
composer require vlucas/phpdotenv
```
Ajoutez une base de donnée en copiant ce code dans app/dependencies.php
```
        PDO::class => function (ContainerInterface $c) {

            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            $dsn = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_DATABASE'].";charset=".$_ENV['DB_CHARSET'];
            return new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        },
```

Copier/Coller le fichier de configuration
```
cd app-skeleton-slim/app/
cp exemple.env .env
```
Installation de la couche view 
```
composer require slim/twig-view:^3.0
mkdir var/cache
```

---
## Docker

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd app-skeleton-slim
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

---
## Testing

```bash
composer test
```

