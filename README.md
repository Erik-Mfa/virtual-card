<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the project

This project is used to generate a QR Code that takes you to a custom page about John's informations, to be more specifc his business card<br>
The application was made using Laravel and Tailwind CSS<br>
For the project build, it was used Laravel Sail and Docker<br>
The Database is SQLite, the DB is located at database/database.sqlite

## What you need for this project

To run your project first you'll need to have Docker installed in your machine<br>
If you're using Windows, you have to install WSL2 to run Docker Desktop<br>

After installed, you have to generate the docker images to run it<br>
But for that you need Laravel Sail and Composer installed<br>

For this, first access the application directory and type:<br>
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs

After that type: "./vendor/bin/sail up -d" to generate the images and also run your container on background

Add a new file named .env, and copy all the code from the .env.example to it

## How it works?

First we have a form that contains the information about John, like he's name, linkedin and github URL's. Thats the information that is going to be in the John's business card

<img src="/public/assets/images/virtual-card-form.png" width="400" alt="form">

When all the input value changes are done, you can press the "Generate" button to change John's information and generate the QR Code

<img src="/public/assets/images/qrcode.png" width="400" alt="qrcode">

After generate the QR Code, it's possible to scann it with your mobile phone, that is going to lead you to John's personal page with all the information that you changed in the form

<img src="/public/assets/images/business-card.jpg" width="400" alt="card">

## Online APP

I also hosted my application in a platform called Railway<br>
The app is going to be online sometimes, might check ;)<br>
https://virtual-card-production.up.railway.app/
