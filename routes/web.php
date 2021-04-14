<?php

use Illuminate\Support\Facades\Route;
//use Mcamara\LaravelLocalization;
use app\mail\notifyEmail;
use Illuminate\Support\Facades\mail;
use Mcamara\LaravelLocalization\LaravelLocalization;

//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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
Route::get('index','Front\FristController@showAdminName1');
//Route::get('/test1', function () {
//    return 'welcomes';
//})->name('a');
//Route::get('/test', function () {
//    return 'welcomes';
//})->name('b');
//route::namespace('Front')->group(function (){
//route::get('users','FristController@showAdminName');
//});
//route::group(['namespace' => 'Front'] ,function() {
//    route::get('test', 'FristController@showAdminName');
//});
route::group(['namespace' => 'Front'] ,function() {
    route::get('test', 'FristController@showAdminName0')-> middleware('auth');
});
    //نفس فكره ال middleware بس بضيف ليهم بعد ال user ,'middleware'='user'
//    route::get('/', function () {
//        return 'work';
//    });
//    });
//route::group(['namespce' => 'Front'] ,
//    function(){
//    route::get('second','FristController@showAdminName0');
//});
//route::group(['namespace' => 'SecondController'] ,
//    function() {
//        route::get('second', 'ExamController@showAdminName');
//    });


//
//
//
route::group(['namespace' => 'Front'] ,function() {
    route::get('second', 'FristController@showAdminName0')-> middleware('auth');
//طريقه كتابه ال middleware
//route::group(['middleware' => 'auth'] ,function() {
//طريقه كتابه ال middleware في group
//}
});
route::get('fialable','CrudController@getoffer');

  Route::group(['prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)
  ->setLocale(),
 'middleware' => [ 'localeSessionRedirect',
'localizationRedirect','localeViewPath',
                ]
              ],
function(){Route::group(['prefix'=>'offers'],function()
    {

        Route::get('create','CrudController@create');
        Route::post('store','CrudController@store')-> name('offers.store');
        Route::get('all','CrudController@getAllOffer');
        Route::get('edit/{offer_id}','CrudController@editOffer');
        Route::post('update/{offer_id}','CrudController@updateOffer')-> name('offers.update');
    });
});
Route::get('hala', function () {
  return view('dashboard');
});
