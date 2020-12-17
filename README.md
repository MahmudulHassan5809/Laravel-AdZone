# ![Laravel AdZone App]

> ### Classified Ad Posting App Using Laravel 7.



----------

# Getting started

## Installation


Clone the repository

    git clone git@github.com:MahmudulHassan5809/Laravel-AdZone.git

Switch to the repo folder

    cd Laravel-AdZone

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:MahmudulHassan5809/Laravel-AdZone.git
    cd Laravel-AdZone
    composer install
    cp .env.example .env
    php artisan key:generate


**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve


## Database seeding
Open the RolesTableDataSeeder,UsersTableDataSeeder and set the property values as per your requirement

    database/seeds/RolesTableDataSeeder.php
    database/seeds/UsersTableDataSeeder.php

Run the database seeder and you're done

    php artisan db:seed


<h2>Author</h2>
<blockquote>
  Mahmudul Hassan<br>
  Email: mahmudul.hassan240@gmail.com
</blockquote>

<div align="center">
    <h3>========Thank You !!!=========</h3>
</div>
