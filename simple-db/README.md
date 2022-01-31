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
```bash
cd simple-db
composer start
```

## Procedure d'installation à partir de zero
```bash
composer create-project slim/slim-skeleton simple-db
```
Ajoutez une base de donnée via app/settings.php


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

