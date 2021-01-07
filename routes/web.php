<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseraccController;
use App\Http\Controllers\PostController;

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
Route::get('/', function(){
    return redirect('/login');
});
// Login
Route::resource('login', 'App\Http\Controllers\UseraccController');
// ================ MEDIA (HOME PAGE)============================
// Home
Route::post('home','App\Http\Controllers\UseraccController@log2')->name('log2');
// Media
Route::resource('media', 'App\Http\Controllers\PostController');
// Like
Route::post('like','App\Http\Controllers\PostController@like')->name('like');
// ================ SEARCH ============================
// Show Search
Route::post('showsearch','App\Http\Controllers\PostController@showsearch')->name('showsearch');
// ================ PROFILE ============================
// Top Profile
Route::get('toprofile','App\Http\Controllers\PostController@toprofile')->name('toprofile');
// Profile
Route::resource('profile', 'App\Http\Controllers\ProfileController');
// Get editprofile
Route::post('geteditprofile', 'App\Http\Controllers\ProfileController@geteditprofile')->name('geteditprofile');
// ================= FOLLOW ===========================
// Follow Act
Route::post('followact','App\Http\Controllers\ProfileController@followact')->name('followact');
// Follow List
Route::post('followlist','App\Http\Controllers\ProfileController@followlist')->name('followlist');
// ================= CLASS ===========================
// Class
Route::resource('class', 'App\Http\Controllers\ClassController');
// Joined Class
Route::get('joinedclass','App\Http\Controllers\ClassController@joinedclass');
// Create Class
Route::post('createclass','App\Http\Controllers\ClassController@createclass')->name('createclass');
// In Class
Route::post('inclass','App\Http\Controllers\ClassController@inclass')->name('inclass');
// Joining Class
Route::post('joiningclass','App\Http\Controllers\ClassController@joiningclass')->name('joiningclass');
// ================ CREATE MATERIAL AND ASSIGNMENT============================
// Create Assignment
Route::get('create_assignment','App\Http\Controllers\ClassController@createassignment');
// Create Material
Route::post('create_material','App\Http\Controllers\ClassController@creatematerial');
// Creating Material
Route::post('/creatingmaterial','App\Http\Controllers\ClassController@creatingmaterial')->name('creatingmaterial');
// Creating Assignment
Route::post('creatingassignment','App\Http\Controllers\ClassController@creatingassignment')->name('creatingassignment');
// ============================================
//Route::get('anotherprofile','App\Http\Controllers\ProfileController@anotherpf')->name('anotherprofile');     
// Route::get('toprofile/{$anotherid}', function () {
//      return redirect('/profile');
// })->name('toprofile');

Route::get('editprofile',function(){
    return view('layouts.editprofile');
})->name('editprofile');
Route::get('logo',function(){
    return redirect('/media');
})->name('logo');

Route::get('test',function(){
    return view('layouts.view-material');
})->name('test');
