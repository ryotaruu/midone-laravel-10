<?php
// admin
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAuthController;
// front
use App\Http\Controllers\Front\HomePageController;
// check admin
use App\Http\Middleware\CheckAuthAdmin;
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

Route::middleware('loggedin')->group(function() {
    Route::controller(AdminAuthController::class)->group(function () {
        Route::get('login', 'loginView')->name('login-view');
        Route::post('login', 'login')->name('login');
        Route::get('register', 'registerView')->name('register-view');
        Route::post('register', 'register')->name('register');
    });
});

Route::middleware([CheckAuthAdmin::class])->group(function(){
    Route::get('/',function(){
        return redirect()->route('admin.dashboard');
    });
});

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth']], function(){
    Route::controller(AdminPageController::class)->group(function () {
        Route::get('/', 'loadPage')->name('dashboard');
        Route::get('page/{layout}/{pageName}', 'loadPage')->name('page');
    });
    Route::controller(AdminAuthController::class)->group(function () {
        Route::get('logout', 'logout')->name('logout');
    });
});

Route::group(['prefix'=>'home','as'=>'home.','middleware' => ['auth']], function(){
    Route::get('/',function(){
        return 'Trang chủ';
    })->name('home.page');
    Route::controller(HomePageController::class)->group(function () {
        
    });
    Route::controller(AdminAuthController::class)->group(function () {
        Route::get('logout', 'logout')->name('logout');
    });
});