<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::prefix('/admin')->group(function () {
    Route::get('/',[App\Http\Controllers\MainController::class, 'index'])->name('main.admin');
    Route::get('/host/new',[App\Http\Controllers\MainController::class, 'newHost'])->name('main.admin.host.new');
    Route::get('/host',[App\Http\Controllers\MainController::class, 'host'])->name('main.admin.host');
    Route::get('/host/{id}',[App\Http\Controllers\MainController::class, 'pageUpdateHost'])->name('main.admin.host.update');
    Route::get('/host/{id}/delete',[App\Http\Controllers\MainController::class, 'deleteHost'])->name('main.admin.host.delete');
    Route::post('/host/add',[App\Http\Controllers\MainController::class, 'addHost'])->name('main.admin.host.post');
    Route::post('/host/update/{id}',[App\Http\Controllers\MainController::class, 'updateHost'])->name('main.admin.host.post.update');

Route::prefix('client')->group(function () {
    Route::get('/',[App\Http\Controllers\MainController::class, 'client'])->name('client');
    Route::get('/schedule/{id}',[App\Http\Controllers\MainController::class, 'schedule'])->name('client.jadwal');
    Route::post('post/schedule/{id}',[App\Http\Controllers\MainController::class, 'postJadwal'])->name('client.jadwal.post');
    Route::post('post/schedule/{id}/update', [App\Http\Controllers\MainController::class,'updateJadwal'])->name('jadwal.put');
    Route::get('/new',[App\Http\Controllers\MainController::class, 'newClient'])->name('client.new');
    Route::get('/{id}/delete',[App\Http\Controllers\MainController::class, 'deleteClient'])->name('client.delete');
    Route::get('/{id}/update',[App\Http\Controllers\MainController::class, 'updateClient'])->name('client.update');
    Route::post('/{id}/update/post',[App\Http\Controllers\MainController::class, 'postUpdateClient'])->name('client.post.update');
    Route::post('/new/post',[App\Http\Controllers\MainController::class, 'postNewClient'])->name('client.post.new');
});

});
