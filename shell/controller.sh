#! /bin/sh
php artisan make:controller Guest/PageController #!per generare il PageController
#!modifca la route in questo modo Route::get('/', [PageController::class, 'index']);
php artisan make:controller Guest/$1\Controller

php artisan make:model $1

php artisan make:migration create_$2\s_table