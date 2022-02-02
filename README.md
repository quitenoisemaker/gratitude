> ### Gratitude.

# Getting started

## Installation

Install all the dependencies using composer

    composer install

Copy the .env.example file and rename it to .env. Then make the neccessary changes

    Example:   
                DB_DATABASE=YOUR-DATABASE_NAME
                DB_USERNAME=YOUR_DATABASE-USERNAME
                DB_PASSWORD=YOUR_DATABASE-PASSWORD

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


Run the database Seeder to get your Category

    php artisan db:seed


Start the local development server

    php artisan serve


You can now access the server at http://localhost:8000/question
