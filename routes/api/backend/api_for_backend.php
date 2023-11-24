<?php


use App\Http\Controllers\Api\Backend\AuthController;
use App\Http\Controllers\Api\Backend\EmployeeController;
use App\Http\Controllers\Api\Backend\LoginController;
use App\Http\Controllers\Api\Backend\RegisterController;
use Illuminate\Support\Facades\Route;

// here id use two middleware ['cors', 'json.response'] for error showing and Access-Control-Allow-Origin
Route::middleware(['cors', 'json.response'])->prefix('backend')->group(function () {


    // for login use this route
    Route::post('login', [LoginController::class, 'login'])->name('logout');

    // admin user register for use this route
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::middleware('auth:sanctum')->group(function () {

        // use this route for logout user
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        

        // for crud by admin or any role admin using backend interface
        Route::apiResource('employees', EmployeeController::class);
        Route::get('/departments', [EmployeeController::class, 'departments'])->name('departments');
        Route::get('/achievements', [EmployeeController::class, 'achievements'])->name('achievements');

    });
});
