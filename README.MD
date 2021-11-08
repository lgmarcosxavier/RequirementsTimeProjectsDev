# Requirements Times Project Developer

## Información App
Aplicación simple con el objetivo de aprender leaf framework.

## Instalación
```
composer global require leafs/cli
leaf create RequirementsTimesProjectDev --mvc
```

## Dependencias
[Tily](https://leafphp.netlify.app/#/tilly/)
Tilly is a utility 'toolkit' for PHP. Tilly provides a bunch of easy-to-use utility functions, with no config out of the box.
```
composer require leafs/tilly
```

## Configuración
Sunset also includes auth scaffolding which simply allows you to add basic session based auth (login, signup, update profile and guards) to your app by simply running one command.
```
php leaf scaffold:auth
```

Lista comandos CLI Leaf MVC 2.0
```
Leaf MVC v2.0

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  example        example command's description
  help           Displays help for a command
  interact       Interact with your application
  list           Lists commands
  serve          Start the leaf development server
 aloe
  aloe:config    Install aloe config
 app
  app:down       Place app in maintainance mode
  app:up         Remove app from maintainance mode
 d
  d:command      Delete a console command
  d:controller   Delete a controller
  d:factory      Delete a model factory
  d:migration    Delete a migration
  d:model        Delete a model
  d:seed         Delete a model seeder
 db
  db:install     Create new database from .env variables
  db:migrate     Run the database migrations
  db:rollback    Rollback all database migrations
  db:seed        Seed the database with records
 env
  env:generate   Generate .env file
 g
  g:command      Create a new console command
  g:controller   Create a new controller class
  g:factory      Create a new model factory
  g:helper       Create a new helper class
  g:migration    Create a new migration file
  g:model        Create a new model class
  g:seed         Create a new seed file
  g:template     Create a new view file
 scaffold
  scaffold:auth  Scaffold basic app authentication
```

## Configuración base de datos
Ejecutar las migraciones
```
php leaf db:migrate
```

## Instrucciones de despliegue
```
php leaf serve
```
