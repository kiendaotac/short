<?php

use App\Http\Controllers\Backend\UrlController;
use App\Http\Controllers\RedirectController;
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
})->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
    Route::get('/dashboard', function () {
//        return redirect()->route('admin.urls.index');
        return view('dashboard');
    })->name('dashboard');
    Route::get('urls', [UrlController::class, 'index'])->name('admin.urls.index');
    Route::get('urls/create', [UrlController::class, 'create'])->name('admin.urls.create');
    Route::get('urls/{url}', [UrlController::class, 'edit'])->name('admin.urls.edit');
});

require __DIR__.'/auth.php';

Route::get('{path}', [RedirectController::class, 'index'])->name('redirect.index');

Route::fallback(function () { return redirect()->route('home');  });
