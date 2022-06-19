## About This Repository

This project is made for someone who want to make laravel application with bootstrap and adminlte.
in this repo, already include:

-   [Bootstrap](https://getbootstrap.com).
-   [laravel-adminlte by Jeroennoten](https://github.com/jeroennoten/Laravel-AdminLTE).
-   [Basic Laravel Package Requirements](https://laravel.com).

## Featured Existed

-   Authentication Scaffolding by Laravel (Login, Register, Verify Email, Forgot Password, etc).
-   <code>config</code> AdminLTE by Jeroennoten.
-   <code>assets</code> AdminLTE by Jeroennoten.
-   <code>translations</code> AdminLTE by Jeroennoten.
-   <code>main_views</code> AdminLTE by Jeroennoten.

To configuration adminlte you can go to <code>app/config/adminlte.php</code>

See documentation about [Laravel AdminLTE by Jeroennoten](https://github.com/jeroennoten/Laravel-AdminLTE/wiki).

## Requirements

-   php 7.4 or above.
-   Node
-   Composer

## How To Install

-   <code>git clone https://github.com/muzakirnur/laravel-starter.git (name)</code> Change (name) to your application name
-   <code>composer install</code>
-   <code>composer update</code>
-   <code>npm install && npm run dev</code> to make public/css/app.css and public/js/app.js although it already included so, this is an optional.
-   <code>cp env.example .env</code> to make Environtment for your application
-   <code>php artisan key:generate</code> to make application key
-   <code>php artisan migrate</code> migrating database
-   <code>php artisan serve</code> Run the Program
