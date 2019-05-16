<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/allAbout',function(){
   return "This is About page";
});
Route::get('/contact',function(){
   return view('contact');
});
Route::get('alluser/{id}/{name}',function($id,$name){
    return 'Myuser: '.$id." and Name: ".$name;
})->where('id', '[0-9]+');




Route::get('welcome','myController@index');
Route::get('contact','myController@contact');
Route::get('user','myController@user');
Route::get('about','myController@about');
Route::get('/crud',array('as'=> 'crudHome', 'uses'=>'myController@crud'));

//Route::get('/book',array('as'=> 'bookHome', 'uses'=>'bookController@index'));
//Route::get('/book_create',array('as'=> 'book_create','uses'=>'bookController@create'));
//Route::resource('book','bookController');
Route::get('/book',array('as'=>'bookHome','uses'=>'bookController@index'));
Route::get('/book_create',array('as'=>'book_create','uses'=>'bookController@create'));

Route::post('/book_create','bookController@store');

Route::get('/book_edit/{id}', 'bookController@edit');
Route::post('/book_update/{id}/',array('as'=>'book.update','uses'=>'bookController@update'));

// mobile controller route
Route::get('/mobile',array('as'=>'mobileHome','uses'=>'mobileController@index'));
Route::get('mobile_create',array('as'=>'mobile_create','uses'=>'mobileController@create'));

Route::post('/mobile_store','mobileController@store');





Route::get('/registration',array('as'=>'registrationHome','uses'=>'regController@index'));

Route::get('/reg_create',array('as'=>'reg_create','uses'=>'regController@create'));

Route::get('/profiles',array ('as'=>'profileHome','uses'=>'profileController@index'));

