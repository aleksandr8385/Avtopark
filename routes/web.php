<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::resource('rest', 'RestTestController')->names('restTest');

Route::group(['namespace'=> 'Avto', 'prefix'=> 'avto'],function(){
    Route::resource('parks', 'ParkController')->names('avto.parks');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Админка АвтоПарка
$groupData = [
    'namespace' => 'Avto\Admin',
    'prefix' => 'admin',
];

Route::group($groupData,function(){
    //AvtoParks 
    $methods = ['index','edit','update','create','store'];
    Route::resource('parks','ParksController')
        ->only($methods)
        ->names('avto.admin.parks');

    //Cars
    Route::resource('cars','CarsController')
        ->except(['show'])
        ->names('avto.admin.cars');

});

// // Админка Машин
// $groupData = [
//     'namespace' => 'Avto\Admin',
//     'prefix' => 'admin',
// ];

// Route::group($groupData,function(){
//     //AvtoParks 
//     $methods = ['index','edit','update','create','store'];
//     Route::resource('cars','CarsController')
//         ->only($methods)
//         ->names('avto.admin.cars');
// });

