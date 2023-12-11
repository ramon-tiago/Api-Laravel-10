<?php

// use App\Http\Controllers\Closeds\Backoffice\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function () {
    Route::resource('', UserController::class)
        ->except(['create',  'edit'])
        ->parameters(['' => 'id']);
});
