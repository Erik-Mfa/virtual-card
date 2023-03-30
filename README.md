<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the project

This project is used to generate a QR Code that takes you to a custom page abot John personal information, to be more specifc his business card
The application was made using Laravel and Tailwind CSS
For the project build, it was used Docker, Composer and NPM
The Database is SQLite, the DB is located at database/database.sqlite

## What you need for this project

To run your project first you'll need to have Docker installed at your machine <br>
When using Windows, you'll have to install WSL2 to run Docker Desktop<br>
Also you are going to need to have Composer installed

After installed, you just have to run your Sail command to generate the docker images and run it
First type: "composer update" to create all your dependencies

After that type: "./vendor/bin/sail up -d" to generate the images and also run your container on background

Type: "php artisan db:seed" to generate new entries on your Database

## How it works?

First we have a form that contains the information about John, like he's name, linkedin and github URL's. Thats the information that is going to be in the John's business card

<img src="/public/images/virtual-card-form.png" width="400" alt="form">

When all the input value changes are done, you can press the "Generate" button to change John's information and generate the QR Code

<img src="/public/images/qrcode.png" width="400" alt="qrcode">

After generate the QR Code, it's possible to scann it with your mobile phone, that is going to lead you to John's personal page with all the information that you changed in the form

<img src="/public/images/business-card.jpg" width="400" alt="card">


