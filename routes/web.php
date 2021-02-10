<?php


use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\TransferController;
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
Route::middleware('auth')->prefix('admin')->group(function () {
    #Admin Role
    Route::middleware('admin')->group(function () {

        // Admin Rezervation
        Route::prefix('rezervation')->group(function (){
            Route::get('/', [\App\Http\Controllers\Admin\RezervationController::class, 'index'])->name('admin_rezervation');
            Route::get('rezervation/delete/{id}', [\App\Http\Controllers\Admin\RezervationController::class, 'destroy'])->name('admin_rezervation_delete');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\RezervationController::class, 'edit'])->name('admin_rezervation_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\RezervationController::class, 'update'])->name('admin_rezervation_update');

        });


#Category
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_home');

        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        //Transfer
        Route::prefix('transfer')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\TransferController::class, 'index'])->name('admin_transfer');
            Route::get('create', [\App\Http\Controllers\Admin\TransferController::class, 'create'])->name('admin_transfer_add');
            Route::post('store', [\App\Http\Controllers\Admin\TransferController::class, 'store'])->name('admin_transfer_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'edit'])->name('admin_transfer_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'update'])->name('admin_transfer_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'destroy'])->name('admin_transfer_delete');
            Route::get('show', [\App\Http\Controllers\Admin\TransferController::class, 'show'])->name('admin_transfer_show');

        });
        #USER
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });


        //Location
        Route::prefix('location')->group(function () {
            Route::get('/', [\App\Http\Controllers\LocationController::class, 'index'])->name('admin_location');
            Route::get('create', [\App\Http\Controllers\LocationController::class, 'create'])->name('admin_location_add');
            Route::post('create', [\App\Http\Controllers\LocationController::class, 'create'])->name('admin_location_create');
            Route::post('store', [\App\Http\Controllers\LocationController::class, 'store'])->name('admin_location_store');
            Route::get('edit/{id}', [\App\Http\Controllers\LocationController::class, 'edit'])->name('admin_location_edit');
            Route::post('update/{id}', [\App\Http\Controllers\LocationController::class, 'update'])->name('admin_location_update');
            Route::get('delete/{id}', [\App\Http\Controllers\LocationController::class, 'destroy'])->name('admin_location_delete');
            Route::get('show', [\App\Http\Controllers\LocationController::class, 'show'])->name('admin_location_show');

        });
        //Message
        Route::prefix('message')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');

        });
#Settings
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update/', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
    });
});

//Rezervation
Route::prefix('rezervation')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\RezervationController::class, 'index'])->name('admin_rezervation');
    Route::get('rezervation/delete/{id}', [\App\Http\Controllers\RezervationController::class, 'destroy'])->name('rezervation_delete');
    Route::get('edit/{id}', [\App\Http\Controllers\RezervationController::class, 'edit'])->name('rezervation_edit');
    Route::post('update/{id}', [\App\Http\Controllers\RezervationController::class, 'update'])->name('user_rezervation_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile.show');

//Transfer
    Route::prefix('transfer')->group(function () {
        Route::get('/',[TransferController::class,'index'])->name('user_transfer');
        Route::get('create',[TransferController::class,'create'])->name('user_transfer_add');
        Route::post('store',[\App\Http\Controllers\RezervationController::class,'store'])->name('user_transfer_store');
        Route::get('edit/{id}',[\App\Http\Controllers\RezervationController::class,'edit'])->name('user_rezervation_edit');
        Route::post('update/{id}',[TransferController::class,'update'])->name('user_transfer_update');
        Route::get('delete/{id}',[TransferController::class,'destroy'])->name('user_transfer_delete');
        Route::get('show',[TransferController::class,'show'])->name('user_transfer_show');
        Route::get('create',[\App\Http\Controllers\RezervationController::class,'user_index'])->name('user_transfer_add');

    });

});



Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

