## Rich Internet Applications Coursework

My coursework for Rich Internet Applications at Abertay University.

## System Requirements
* PHP 5.5.9 >= for Laravel 5.2 https://github.com/laravel/laravel
* Composer https://getcomposer.org/
* nodejs & npm https://nodejs.org/en/

## Setting up this project

1. Clone this repository and have a web server point to the public directory.
2. Clone the .env.example file as .env in the project root.
3. Enter the database details into the .env file.
4. In the commandline, navigate to the project root and run the following commands:
```bash
 composer install
 npm install
 php artisan key:generate
 php artisan migrate
 php artisan db:seed
 gulp
```
