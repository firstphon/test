<?php

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
    $title="หน้าหลัก! ";
    $content="home";
    return view('welcome')->with(['title' => $title,'content' => $content]);
})->name('home');

Route::get('/contact', function  () {
    $title="ติดต่อเรา";
    $content="contact";
   // return "ติดต่อได้ที่เบอร์ 095-654-6548";
   return view('contact')->with(['title' => $title,'content' => $content]);
})->name('contact')->middleware('auth');

Route::get('/about', function () {
    $title="เกี่ยวกับเรา";
    $content="about me";
    //return "เกี่ยวกับเรา";
    return view('about')->with(['title' => $title,'content' => $content]);
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
