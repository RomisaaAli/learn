<?php

use Illuminate\Support\Facades\Route;
//use Mcamara\LaravelLocalization\LaravelLocalization;

use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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
//Route::get('/', function () use ($data) {
//    return view('welcome',$data);
//});
//use Symfony\Component\Routing\Route;

//use Illuminate\Support\Facades\Route;

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
//route::group(['namespace' => 'Front'] ,function() {
//    route::get('second1', 'FristController@showAdminName1');
//});
//
//    route::get('login',function()
//    {
//        return "must be login dirict";
//
//})-> name('login');
//
//Route::resource('news','NewsController');
//    //بعد عمل name باسم login يتم التعرف عليها ويديني نتيجه must be ...etc
////route::group(['namespace' => 'Front'] ,function() {
////    route::get('second', 'FristController@showAdminName1');
////});
//
//route::resource('rom','RomsController');

//route::get('login2' ,'RemaController@store');
route::get('fialable','CrudController@getoffer');
route::group(['prefix'=>'offers'],function(){
   Route::group(['prefix' => LaravelLocalization::setLocale()], function()
    {
        route::get('create','CrudController@create');
   });
    route::post('store','CrudController@store')-> name('offers.store');

});
Route::get('hala', function () {
  return view('dashboard');
});


// Route::group([
//     'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
//     //'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
// ], function () {
    //route::get('create','CrudController@create');
//});
