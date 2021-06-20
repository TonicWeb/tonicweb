<?php


Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/services', function () {
//    return view('services');
//})->name('services');

Route::prefix('services')->group(function(){
    Route::get('/', 'ServicesController@index')->name('services');
    Route::get('/creative', 'ServicesController@creative')->name('creative');
    Route::get('/technology', 'ServicesController@technology')->name('technology');
    Route::get('/strategy', 'ServicesController@strategy')->name('strategy');
});
Route::prefix('our-work')->group(function(){
    Route::get('/', 'OurWorkController@index')->name('our-work');
});

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/case-study-template', function () {
    return view('case-study-template');
})->name('case-study-template');