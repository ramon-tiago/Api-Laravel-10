<?php

use Illuminate\Support\Facades\Route;


Route::controller(HelloWorldController::class)->group(function () {
    route::get('/', 'get');
});
