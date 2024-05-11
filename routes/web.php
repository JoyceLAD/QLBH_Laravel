<?php
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhController;
use App\Http\Controllers\RoleController;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;

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
//Route::get('/login','AuthController@index')->name('getlogin');
Route::get('login', [AuthController::class, 'index'])->name('getlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'registration'])->name('getregister');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/', [AuthController::class, 'index'])->name('first');
Route::middleware('login')->group(function(){
    Route::get('/dasboard', [AuthController::class, 'welcome'])->name('dasboard');
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
    // Route::get('/das', [AuthController::class, 'welcome'])->name('welcome');
    
    //Role
    Route::get('username', [HomeController::class, 'username'])->name('username');
    Route::get('role', [RoleController::class, 'getrole'])->name('getrole');
    Route::post('role', [RoleController::class, 'postrole'])->name('postrole');
    Route::get('listRole',[RoleController::class,'getlistRole'])->name(('getlistRole'));
    Route::get('list',[RoleController::class,'list'])->name(('list'));
    Route::post('deleterole1', [RoleController::class, 'deleterole1'])->name('postdeleterole1');
    Route::post('deleterole2', [RoleController::class, 'deleterole2'])->name('postdeleterole2');
    
    
    
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
    Route::post('updatekh_home', [KhController::class, 'postupdatekh_home'])->name('postupdatekh_home');
    Route::post('deletekh_home', [KhController::class, 'postdeletekh_home'])->name('postdeletekh_home');
    
    
    
    //crud dh
    Route::get('adddh', [DhController::class, 'getadddh'])->name('getadddh');
    Route::post('adddh', [DhController::class, 'postadddh'])->name('postadddh');
    Route::get('deletedh', [DhController::class, 'getdeletedh'])->name('getdeletedh');
    Route::post('deletedh', [DhController::class, 'postdeletedh'])->name('postdeletedh');
    Route::get('updatedh', [DhController::class, 'getupdatedh'])->name('getupdatedh');
    Route::post('updatedh', [DhController::class, 'postupdatedh'])->name('postupdatedh');
    Route::post('updatedh_home', [DhController::class, 'postupdatedh_home'])->name('postupdatedh_home');
    Route::post('deletedh_home', [DhController::class, 'postdeletedh_home'])->name('postdeletedh_home');
    
    
    //tk
    Route::get('updateaccount', [HomeController::class, 'getupdateaccount'])->name('getupdateaccount');
    Route::post('updateaccount', [HomeController::class, 'postupdateaccount'])->name('postupdateaccount');
    
    //Search
    Route::get('searchdh', [SearchController::class, 'getSearchdh'])->name('getsearchdh');
    Route::post('searchdh', [SearchController::class, 'postSearchdh'])->name('searchdh');
    Route::get('searchkh', [SearchController::class, 'getSearchkh'])->name('getsearchkh');
    Route::post('searchkh', [SearchController::class, 'postSearchkh'])->name('searchkh');
    
    //Export
    Route::get('exportdh', [HomeController::class, 'exportdh'])->name('exportdh');
    Route::get('exportkh', [HomeController::class, 'exportkh'])->name('exportkh');
    
    //Import
    Route::post('importdh', [HomeController::class, 'importdh'])->name('importdh');
    Route::post('importkh', [HomeController::class, 'importkh'])->name('importkh');
    //detail customer
    //Route::get('/detailkh/{id}',[KhController::class,'detailkh'])->name('detailkh1');
    
});
Route::get('/detailkh/{id}',[KhController::class,'detailkh'])->middleware(['login','detailkh'])->name('detailkh1');


//Notify
Route::get('/errornotify',[NotifyController::class,'getErrorSession'] )->name('errornotify');


