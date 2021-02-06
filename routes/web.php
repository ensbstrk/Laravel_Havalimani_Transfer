<?php


use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/transfer/{id}/{slug}', [HomeController::class, 'transfer'])->name('transfer');
Route::get('/categorytransfers/{id}/{slug}', [HomeController::class, 'categorytransfers'])->name('categorytransfers');
Route::get('/rezervasion/{id}', [HomeController::class, 'rezervasion'])->name('rezervasion');
Route::post('/gettransfer', [HomeController::class, 'gettransfer'])->name('gettransfer');
Route::get('/transferlist/{search}', [HomeController::class, 'transferlist'])->name('transferlist');








//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');





//ADMİN
Route::middleware('auth')->prefix('admin')->group(function (){




    Route::get('/',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    //Transfer
    Route::prefix('transfer')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\TransferController::class,'index'])->name('admin_transfer');
        Route::get('create',[\App\Http\Controllers\Admin\TransferController::class,'create'])->name('admin_transfer_add');
        Route::post('store',[\App\Http\Controllers\Admin\TransferController::class,'store'])->name('admin_transfer_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\TransferController::class,'edit'])->name('admin_transfer_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\TransferController::class,'update'])->name('admin_transfer_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\TransferController::class,'destroy'])->name('admin_transfer_delete');
        Route::get('show',[\App\Http\Controllers\Admin\TransferController::class,'show'])->name('admin_transfer_show');

    });
    //Message
    Route::prefix('message')->group(function (){
        Route::get('/',[MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');

    });
#Settings
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update/',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');
});





Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum','verified'])->get('dashboard',function (){
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

