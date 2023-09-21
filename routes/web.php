<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return inertia('Welcome',[
    'name' => 'Esraa',
    'frameworks' => ['Laravel', 'Angular','Vue']
    ]);
});
Route::get('/', function () {
    return inertia('Home',[
    'name' => 'Esraa',
    'frameworks' => ['Laravel', 'Angular','Vue']
    ]);
});
Route::get('/users', function () {
    return inertia('Users',[
    'name' => 'Esraa',
    'frameworks' => ['Laravel', 'Angular','Vue']
    ]);
});
Route::get('/settings', function () {
    return inertia('Settings',[
    'name' => 'Esraa',
    'frameworks' => ['Laravel', 'Angular','Vue']
    ]);
});
