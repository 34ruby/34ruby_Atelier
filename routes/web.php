<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PicturesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('/upload', UploadController::class)->middleware(['auth']);;
// Route::get('/upload/create', UploadController::class, 'create')->middleware(['auth']);;
// Route::get('/upload', UploadController::class, 'index')->middleware(['auth']);;
// Route::post('/upload/store', UploadController::class, 'store')->middleware(['auth']);;
// Route::get('/upload/{upload}', UploadController::class, 'show')->middleware(['auth']);;


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth']);;

Route::get('/view', [ViewController::class, "index"])->middleware(['auth', 'cors']);;


Route::resource('/posts', PostsController::class)->middleware(['auth']);;
// Route::resource('/tabs', TabsController::class)->middleware(['auth']);;

// Route::get('/upload', [UploadController::class, 'index']);
// Route::post('/upload', [UploadController::class, 'store']);

Route::resource('/pictures', PicturesController::class)->middleware(['auth']);

Route::post('/comments/store', [CommentController::class, "store"])->name('comment.add');
