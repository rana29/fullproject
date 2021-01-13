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



Auth::routes(['verify' => true]);


Route::get('/home','HomeController@index')->name('home');
Route::get('/','frontend\frontendcontroller@index')->name('home');
Route::get('/about','frontend\frontendcontroller@about')->name('about');
Route::get('/mission/vision','frontend\frontendcontroller@mission')->name('mission');
Route::get('/detil/{id}','frontend\frontendcontroller@detil')->name('detil');
Route::get('/contact','frontend\frontendcontroller@contact')->name('contact');

Route::get('/vision/mission','frontend\frontendcontroller@vision')->name('vision');
Route::get('/news/event','frontend\frontendcontroller@news')->name('news');
Route::post('/stroe/contact','frontend\frontendcontroller@store')->name('store.contact');




Route::group(['middleware'=>'login'],function(){

Route::prefix('user')->name('user.')->group(function(){

    Route::get('/view','UserController@view')->name('view')->middleware('login');
	Route::get('/create','UserController@create')->name('create');
	Route::post('/store','UserController@store')->name('store');
	Route::post('/active','UserController@active')->name('active');
	Route::post('/inactive','UserController@inactive')->name('inactive');
	Route::get('/edit/{id}','UserController@edit')->name('edit');
	Route::post('/update/{id}','UserController@update')->name('update');
	Route::post('/delete/{id}','UserController@delete')->name('delete');
	
}); 

});

Route::group(['middleware'=>'login'],function(){
	
Route::prefix('profile')->name('profile.')->middleware('login')->group(function(){

    Route::get('/view','profilecontroller@view')->name('view');
	Route::get('/edit','profilecontroller@edit')->name('edit');
	Route::post('/update','profilecontroller@update')->name('update');
	Route::post('/delete/{id}','profilecontroller@delete')->name('delete');
	Route::get('/password/change','profilecontroller@password')->name('password');
	Route::post('/password/update','profilecontroller@password_change')->name('password_change');
	
});

});



Route::prefix('logo')->name('logo.')->middleware('login')->group(function(){

    Route::get('/view','logoController@view')->name('view');
	Route::get('/create','logoController@create')->name('create');
	Route::post('/store','logocontroller@store')->name('store');
	Route::post('/active','logoController@active')->name('active');
	Route::post('/inactive','logoController@inactive')->name('inactive');
	Route::get('/edit/{id}','logoController@edit')->name('edit');
	Route::post('/update/{id}','logoController@update')->name('update');
	Route::post('/delete/{id}','logoController@delete')->name('delete');
	
}); 


Route::prefix('slider')->middleware('login')->name('slider.')->group(function(){

    Route::get('/view','slidercontroller@view')->name('view');
	Route::get('/create','slidercontroller@create')->name('create');
	Route::post('/store','slidercontroller@store')->name('store');
	Route::post('/active','slidercontroller@active')->name('active');
	Route::post('/inactive','slidercontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','slidercontroller@edit')->name('edit');
	Route::post('/update/{id}','slidercontroller@update')->name('update');
	Route::post('/delete/{id}','slidercontroller@delete')->name('delete');
	
});



Route::prefix('mission')->name('mission.')->group(function(){

    Route::get('/view','missioncontroller@view')->name('view');
	Route::get('/create','missioncontroller@create')->name('create');
	Route::post('/store','missioncontroller@store')->name('store');
	Route::post('/active','missioncontroller@active')->name('active');
	Route::post('/inactive','missioncontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','missioncontroller@edit')->name('edit');
	Route::post('/update/{id}','missioncontroller@update')->name('update');
	Route::post('/delete/{id}','missioncontroller@delete')->name('delete');
	
});


Route::prefix('vision')->name('vision.')->group(function(){

    Route::get('/view','visioncontroller@view')->name('view');
	Route::get('/create','visioncontroller@create')->name('create');
	Route::post('/store','visioncontroller@store')->name('store');
	Route::post('/active','visioncontroller@active')->name('active');
	Route::post('/inactive','visioncontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','visioncontroller@edit')->name('edit');
	Route::post('/update/{id}','visioncontroller@update')->name('update');
	Route::post('/delete/{id}','visioncontroller@delete')->name('delete');
	
});


Route::prefix('news')->name('news.')->group(function(){

    Route::get('/view','newscontroller@view')->name('view');
	Route::get('/create','newscontroller@create')->name('create');
	Route::post('/store','newscontroller@store')->name('store');
	Route::post('/active','newscontroller@active')->name('active');
	Route::post('/inactive','newscontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','newscontroller@edit')->name('edit');
	Route::post('/update/{id}','newscontroller@update')->name('update');
	Route::post('/delete/{id}','newscontroller@delete')->name('delete');
	
});


Route::prefix('service')->name('service.')->group(function(){

    Route::get('/view','servicecontroller@view')->name('view');
	Route::get('/create','servicecontroller@create')->name('create');
	Route::post('/store','servicecontroller@store')->name('store');
	Route::post('/active','servicecontroller@active')->name('active');
	Route::post('/inactive','servicecontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','servicecontroller@edit')->name('edit');
	Route::post('/update/{id}','servicecontroller@update')->name('update');
	Route::post('/delete/{id}','servicecontroller@delete')->name('delete');
	
});


Route::prefix('contact')->name('contact.')->group(function(){

    Route::get('/view','contactcontroller@view')->name('view');
	Route::get('/create','contactcontroller@create')->name('create');
	Route::post('/store','contactcontroller@store')->name('store');
	Route::post('/active','contactcontroller@active')->name('active');
	Route::post('/inactive','contactcontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','contactcontroller@edit')->name('edit');
	Route::post('/update/{id}','contactcontroller@update')->name('update');
	Route::post('/delete/{id}','contactcontroller@delete')->name('delete');
	
});

