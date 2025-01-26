<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Creator\UsersController;
use App\Http\Controllers\Creator\ImagesController;
use App\Http\Controllers\Frontline\HomeController;
use App\Http\Controllers\Creator\ReportsController;
use App\Http\Controllers\Frontline\AboutController;
use App\Http\Controllers\Creator\DashboardController;
use App\Http\Controllers\Frontline\ArticleController;
use App\Http\Controllers\Frontline\ProjectController;
use App\Http\Controllers\Creator\PublicationController;
use App\Http\Controllers\Creator\Auth\AuthenticatedSessionController;

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

// Auth

Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('admin/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store')
    ->middleware('guest');

Route::delete('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Dashboard

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// Users

Route::get('admin/users', [UsersController::class, 'index'])
    ->name('users')
    ->middleware('auth');

Route::get('admin/users/create', [UsersController::class, 'create'])
    ->name('users.create')
    ->middleware('auth');

Route::post('admin/users', [UsersController::class, 'store'])
    ->name('users.store')
    ->middleware('auth');

Route::get('admin/users/{user}/edit', [UsersController::class, 'edit'])
    ->name('users.edit')
    ->middleware('auth');

Route::put('admin/users/{user}', [UsersController::class, 'update'])
    ->name('users.update')
    ->middleware('auth');

Route::delete('admin/users/{user}', [UsersController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::put('admin/users/{user}/restore', [UsersController::class, 'restore'])
    ->name('users.restore')
    ->middleware('auth');

// Publications

Route::get('admin/publications', [PublicationController::class, 'index'])
    ->name('publications')
    ->middleware('auth');

Route::get('admin/publications/create', [PublicationController::class, 'create'])
    ->name('publications.create')
    ->middleware('auth');

Route::post('admin/publications', [PublicationController::class, 'store'])
    ->name('publications.store')
    ->middleware('auth');

Route::get('admin/publications/{article}/edit', [PublicationController::class, 'edit'])
    ->name('publications.edit')
    ->middleware('auth');

Route::put('admin/publications/{article}', [PublicationController::class, 'update'])
    ->name('publications.update')
    ->middleware('auth');

Route::delete('admin/publications/{article}', [PublicationController::class, 'destroy'])
    ->name('publications.destroy')
    ->middleware('auth');

Route::put('admin/publications/{article}/restore', [PublicationController::class, 'restore'])
    ->name('publications.restore')
    ->middleware('auth');

// Reports

Route::get('admin/reports', [ReportsController::class, 'index'])
    ->name('reports')
    ->middleware('auth');

// Images

Route::get('/img/{path}', [ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('image');

// Frontline

Route::get('/', [HomeController::class, 'index'])
->name('home');

Route::get('/about', [AboutController::class, 'index'])
->name('about');

Route::get('/project', [ProjectController::class, 'index'])
->name('project');

Route::get('/article', [ArticleController::class, 'index'])
->name('article');