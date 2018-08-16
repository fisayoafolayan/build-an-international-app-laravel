# Build an International App with Laravel     

This is a simple implementation of how to build an International Application using Laravel. It has basic authentication features set up.

To follow along, this application has been documented in a 4 part article series. You can read about [Part 1](https://pusher.com/tutorials/localized-laravel-part-1), [Part 2](https://pusher.com/tutorials/localized-laravel-part-2), [Part 3](https://pusher.com/tutorials/localized-laravel-part-3), [Part 4](https://pusher.com/tutorials/localized-laravel-part-4) on Pusher [blog](https://pusher.com/tutorials).

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
$ git clone https://github.com/fisayoafolayan/build-an-international-app-laravel.git
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
