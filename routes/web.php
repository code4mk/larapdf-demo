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
    return view('welcome');
});

Route::get('lara-pdf',function(){
  return view('pdf.home');
});

Route::get('lara-pdf/simple/show',function(){
  $user = [
		'address' => "345 Anotherstreet",
    'age' => '21'
	];
  return LARAPDF::loadView('pdf.simple',['user'=>$user])
        ->paper('a4')
        ->margin(10,10,10,10)
        ->textWatermark('23456543000',0.1,45)
        ->imageWatermark('https://brandmark.io/logo-rank/random/beats.png',0.2,[100,100])
        //->get('my-invoice2019cse1.pdf');
        ->show();
});

Route::get('lara-pdf/simple/download',function(){
  $user = [
		'address' => "345 Anotherstreet",
    'age' => '21'
	];
  return LARAPDF::loadView('pdf.simple',['user'=>$user])
        ->paper('a4')
        ->margin(10,10,10,10)
        ->textWatermark('23456543000',0.1,45)
        ->imageWatermark('https://brandmark.io/logo-rank/random/beats.png',0.2,[100,100])
        ->download('lara-pdf-invoice.pdf');
});

Route::get('lara-pdf/simple/save',function(){
  $user = [
		'address' => "345 Anotherstreet",
    'age' => '21'
	];
   LARAPDF::loadView('pdf.simple',['user'=>$user])
        ->paper('a4')
        ->margin(10,10,10,10)
        ->textWatermark('23456543000',0.1,45)
        ->imageWatermark('https://brandmark.io/logo-rank/random/beats.png',0.2,[100,100])
        ->save('lara-pdf-invoice.pdf','local');
  dump('done save in your storage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
