<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'opens';
// });
Route::controller(HelloWorldController::class)->group(function () {
    route::get('/', 'get');
});
