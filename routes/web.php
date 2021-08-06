<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

    Auth::routes();

    Route::get('/home', [HomeController::class,'index']);

    Route::post('/lang', [LangController::class,'postLang'])->name('switchLang');

    Route::get('/', function () {
        return view('welcome');
    });
});
