# Build an International App with Laravel     

This is a simple implementation of how to build an International Application using Laravel. It has basic authentication features set up. Read more about it on pusher

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites
What things you need to install the software.

- Git.
- PHP.
- Composer.
- Laravel CLI.

## Install
Clone the git repository on your computer
```
$ git clone https://github.com/fisayoafolayan/Build-an-International-App-With-Laravel.git
```
You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.
```
$ cd build-an-international-app-laravel
$ composer install
```

## Setup
When you are done with installation, copy the .env.example file to .env
```
$ cp .env.example .env
```

Create the SQLite database 
```
$ touch database/database.sqlite
```

Update your env file to use SQLite
```
// replace
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

// with
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

Migrate the application
```
$ php artisan migrate
``` 

Run the application
```
$ php artisan serve
```
