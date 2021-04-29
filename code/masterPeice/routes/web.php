<?php

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



Route :: get('/home','HomeController@index');
Route :: get('/maincourses','mainCourseController@index');
Route :: get('/maintopics','mainTopicController@index');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Admin Routs 
Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/', 'AdminController@index2')->name('admin.dashboard');
    Route::post('addadmin', 'AdminController@store');
    Route::get('deleteadmin/{id}', 'AdminController@destroy');
    Route::get('editadmin/{id}/editadmin', "AdminController@edit");
    Route::put('updateadmin/{id}', 'AdminController@update');
    // Login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});
//course category Routs 
Route::prefix('cat')->group(function(){
    Route::get('/','CatController@index');
    Route::post('/addcat','catController@store');
    Route::get('/editcat/{id}/editcat','catController@edit');
    Route::put('/updatecat/{id}','catController@update');
    Route::get('/deletecat/{id}','catController@destroy');
});
//course Routs 
Route::prefix('course')->group(function(){
    Route:: get('/','courseController@index');
    Route:: Post('/addcourse','courseController@store');
    Route:: get('/editcourse/{id}/editcourse','courseController@edit');
    Route:: put('/updatecourse/{id}','courseController@update');
    Route:: get('/deletecourse/{id}','courseController@destroy');
});

Route::resource('topics', 'TopicsController');
Route::get('topics/deletetopic/{id}', 'TopicsController@destroy');


Route::resource('questions', 'QuestionsController');

Route::resource('questions_options', 'QuestionsOptionsController');

Route::resource('results', 'ResultsController');

Route::resource('tests', 'TestsController');
Route::resource('tests', 'TestsController');
Route::get('tests/{id}', 'TestsController@show');
Route::get('tests', 'TestsController@store');

Route::get('singelcourse/{id}', 'singelcourseController@index')->name('singlecourse.show');

Route::delete('/courses/{course}', 'cartController@destroy')->name('courses.remove');

Route::get('addToCart/{course}', 'cartController@addToCart')->name('cart.add');
Route::get('shopping-cart', 'cartController@showCart') ->name('cart.show');

Route::get('/checkout', 'cartController@Checkout')->name('cart.checkout')->middleware('auth');


