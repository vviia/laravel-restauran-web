<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[HomeController::class,"index"]);
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);
Route::get("/updatemenu/{id}",[AdminController::class,"updatemenu"]);
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::Post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::post("/update/{id}",[AdminController::class,"update"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewchef",[AdminController::class,"viewchef"]);
Route::Post("/uploadchef",[AdminController::class,"uploadchef"]);

Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);
Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);

Route::get("/deletefoodchef/{id}",[AdminController::class,"deletefoodchef"]);
Route::post("/addcart/{id}",[AdminController::class,"addcart"]);

Route::get("/showcart/{id}",[AdminController::class,"showcart"]);
Route::get("/remove/{id}",[AdminController::class,"remove"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
