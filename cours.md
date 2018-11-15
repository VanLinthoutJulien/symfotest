#Symfony4
Installer composer
Plugins : 
 - Symfony Plugin
 - twig
# Créer le projet avec composer
composer create-project symfony/skeleton project_name

#Environnement de dev
composer require server --dev

#Lancer le serveur
cd nom du projet
php bin/console server:run
OU
php -S 127.0.0.1:8000 -t public

#instalaltion twig
composer require twig

#installation annotation
composer require annotation

#installation profiler pour debugger (bas de l'écran de l'appli)
composer require profiler

- form
- validator
- orm

créer une entité
php bin/console make:entity Post