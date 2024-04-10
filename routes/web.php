<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhController;

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
// })->name('dasboard');

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'registration']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('/', [AuthController::class, 'welcome'])->name('dasboard');
// Route::get('/das', [AuthController::class, 'welcome'])->name('welcome');
Route::get('username', [HomeController::class, 'username'])->name('username');
Route::get('role', [RoleController::class, 'getrole'])->name('getrole');
Route::post('role', [RoleController::class, 'postrole'])->name('postrole');

//crud cty

Route::get('addcty', [CtController::class, 'getaddcty'])->name('getaddcty');
Route::post('addcty', [CtController::class, 'postaddcty'])->name('postaddcty');
Route::get('deletecty', [CtController::class, 'getdeletecty'])->name('getdeletecty');
Route::post('deletecty', [CtController::class, 'postdeletecty'])->name('postdeletecty');
Route::get('updatecty', [CtController::class, 'getupdatecty'])->name('getupdatecty');
Route::post('updatecty', [CtController::class, 'postupdatecty'])->name('postupdatecty');

//crud kh
Route::get('addkh', [KhController::class, 'getaddkh'])->name('getaddkh');
Route::post('addkh', [KhController::class, 'postaddkh'])->name('postaddkh');
Route::get('deletekh', [KhController::class, 'getdeletekh'])->name('getdeletekh');
Route::post('deletekh', [KhController::class, 'postdeletekh'])->name('postdeletekh');
Route::get('updatekh', [KhController::class, 'getupdatekh'])->name('getupdatekh');
Route::post('updatekh', [KhController::class, 'postupdatekh'])->name('postupdatekh');
Route::post('updatekh', [KhController::class, 'postupdatekh_home'])->name('postupdatekh_home');


//crud dh
Route::get('adddh', [DhController::class, 'getadddh'])->name('getadddh');
Route::post('adddh', [DhController::class, 'postadddh'])->name('postadddh');
Route::get('deletedh', [DhController::class, 'getdeletedh'])->name('getdeletedh');
Route::post('deletedh', [DhController::class, 'postdeletedh'])->name('postdeletedh');
Route::get('updatedh', [DhController::class, 'getupdatedh'])->name('getupdatedh');
Route::post('updatedh', [DhController::class, 'postupdatedh'])->name('postupdatedh');
Route::post('updatedh', [DhController::class, 'postupdatedh_home'])->name('postupdatedh_home');

//tk
Route::get('updateaccount', [HomeController::class, 'getupdateaccount'])->name('getupdateaccount');
Route::post('updateaccount', [HomeController::class, 'postupdateaccount'])->name('postupdateaccount');


