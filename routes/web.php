<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\VehicleRouteController;
use App\Http\Controllers\Customer\BookingController as CustomerBookingController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\ProfileController;

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

// Frond-end route =========================================
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
//End Frond-end route =========================================

// Common route =========================================
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login/auth', [AuthController::class, 'login_auth'])->name('login.auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('feedbacks', FeedbackController::class);

// End Common route =========================================


// user route =========================================
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    //with login

    Route::middleware(['auth', 'role:user'])->group(function () {
        //with login
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AdminController::class, 'AdminLogout'])->name('logout');
        Route::resource("profile", ProfileController::class);
        Route::resource("customer", CustomerController::class);
        Route::resource('vehicle', VehicleController::class);
        Route::resource('root', VehicleRouteController::class);
        Route::resource("booking", CustomerBookingController::class);
        Route::resource("history", HistoryController::class);
    });
});
//End user route =========================================


// Admin route =========================================
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    //with login

    Route::middleware(['auth', 'role:admin'])->group(function () {
        //with login
        Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard');
        Route::get('logout', [AdminController::class, 'AdminLogout'])->name('logout');
        Route::resource("customer", CustomerController::class);
        Route::resource('vehicle', VehicleController::class);
        Route::resource('root', VehicleRouteController::class);
        Route::resource("booking", BookingController::class);
        Route::resource("history", HistoryController::class);
    });
});
//End Admin route =========================================





// route::post('/login',[AuthController::class,'loginUser'])->name('loginUser');
// Route::post('/register', 'AuthController@register');
// Route::get('/login', 'App\Http\Controllers\AuthController@login');
// Route::post('/signup', 'AuthController@register')->name('signup');

// route::view('login','/loginUser');
// route::view('signup','/signupUser');
// Route::get('/signupUser', 'YourController@yourMethod')->name('signupUser');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::middleware(['auth','role:admin'])->group(function(){
//     Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
//     Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
// }); //end group admin middleware


// Route::middleware(['auth','role:agent'])->group(function(){
// Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
// });//end group agent middleware


//Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
//Route::get('/search', 'BusBookingController@search')->name('search');
//Route::get('/book/{route}', 'BusBookingController@book')->name('book');

//Route::get('/some-route', 'App\Http\Controllers\BusBookingController@yourMethod');
