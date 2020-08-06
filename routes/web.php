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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/third-party-insurance', 'FrontController@third_party_insurance')->name('third-party-insurance');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'testview@index');



Route::get('/home', 'HomeController@index')->name('home');
/*Auth::routes();
Auth::routes();*/





/********** Run php artisan in Host **********/
Route::get('/rs/{namecontroller}', 'phpArtisan@rs'); // ساخت کنترلر ریسورس در مسیر اصلی
// example : http://site-url.com/rs/name

Route::get('/rsp/{namecontroller}/{path}', 'phpArtisan@rsp'); // ساخت کنترلر ریسورس در پوشه دلخواه
// example : http://site-url.com/rsp/name/path

Route::get('/ctrl/{namecontroller}', 'phpArtisan@ctrl'); // ساخت کنترلر در مسیر اصلی
// example : http://site-url.com/ctrl/name

Route::get('/rq/{namecontroller}', 'phpArtisan@rq'); // ساخت رکوئست در مسیر اصلی
// example : http://site-url.com/rq/name

Route::get('/ctrlp/{namecontroller}/{path}', 'phpArtisan@ctrlp'); // ساخت کنترلر در پوشه دلخواه
// example : http://site-url.com/ctrlp/name/path

Route::get('/mdl/{namecontroller}', 'phpArtisan@mdl'); //ساخت مدل
// example : http://site-url.com/mdl/name

Route::get('/mg/{namecontroller}', 'phpArtisan@mg'); // ساخت مایگریشن
// example : http://site-url.com/mg/name

Route::get('/runmg', 'phpArtisan@runmg'); // اجرای مایگریشن
// example : http://site-url.com/runmg
/********** Run php artisan in Host **********/
