<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AdvtController;
use App\Models\Advt;

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
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Auth::routes();



Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('advt', AdvtController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/add_biz', [App\Http\Controllers\BizzController::class, 'add_biz'])->name('add_biz');
    Route::post('/store_biz', [App\Http\Controllers\BizzController::class, 'store_biz'])->name('store_biz');
    Route::get('/biz_cat/{cat}', [App\Http\Controllers\BizzController::class, 'biz_cat'])->name('biz_cat');
    Route::get('/advt_cat/{cat}', [App\Http\Controllers\AdvtController::class, 'advt_cat'])->name('advt_cat');
    Route::get('/biz_show/{id}', [App\Http\Controllers\BizzController::class, 'biz_show'])->name('biz_show');
    Route::get('/aleksey', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/reference', function () {
        $ref = \App\Models\Reference::all();
        return view('advt.reference')->with('ref', $ref);
    });

});
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//Route::get('send-mail', [HomeController::class, 'sendMail']);
Route::get('test', [AdvtController::class, 'test']);

Route::get('send_message', [AdvtController::class, 'send_message_form'])->name('send_message_form');
Route::post('send_message', [AdvtController::class, 'send_message'])->name('send_message');


Route::get('/cat_form',[App\Http\Controllers\AdvtController::class,'cat_form'])->name('cat_form');
Route::post('/add_cat',[App\Http\Controllers\AdvtController::class,'add_cat'])->name('add_cat');
Route::get('/ref_form',[App\Http\Controllers\AdvtController::class,'ref_form'])->name('ref_form');
Route::post('/add_ref',[App\Http\Controllers\AdvtController::class,'add_ref'])->name('add_ref');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/electro', [App\Http\Controllers\BizzController::class, 'electro'])->name('electro');
