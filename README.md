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
Test de la framework "Slim" avec différents composants.\
Les prérequis sont :
- php 8.0 (CLI)
- composer 2.0
- Slim 4.9

## Description des projets
Voici les differents tests sur la framework slim

| Valide | Path                    | Description                                            |
|:-------|:------------------------|:-------------------------------------------------------|
| V      | simple-route            | Test sur une simple route                              |
| V      | simple-view-render-twig | Test sur une implementation de la couche view via twig |
| V      | simple-db               | Test sur une implementation d'une base de donnée       |
| F      | app-skeleton-odan       | Test d'un skeleton slim4 custom by Daniel Opitz (odan) |
| V      | app-skeleton-slim  | Test du skeleton officiel de slim4                     |

## stack
- Slim Framework
- Symfony twig
