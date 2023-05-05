<?php

use App\Http\Controllers\ReclamationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/page1",function(){
    return view("page1");
})->name("page1");
Route::get("/page2",[ReclamationController::class, 'index'])->name("page2");

Route::get("/{id}",[ReclamationController::class, 'show'])->name("reclamations.show");

Route::post("/reclamation/store",[ReclamationController::class,'store'])->name("reclamations.store");