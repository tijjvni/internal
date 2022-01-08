<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('clients', App\Http\Controllers\ClientsController::class)->except('edit', 'update', 'destroy');

Route::resource('projects', App\Http\Controllers\ProjectsController::class)->except('edit', 'update', 'destroy');

Route::resource('issues', App\Http\Controllers\IssuesController::class)->except('edit', 'update', 'destroy');
