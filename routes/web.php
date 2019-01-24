<?php

Route::get('/', function () {
    return view('site.home');
})->name('index');

Route::get('/sobre', function(){
	return view('site.sobre');
})->name('sobre');

Route::get('/contato', function(){
	return view('site.contato');
})->name('contato');

Route::get('/imovel/{id}/{titulo?}', function(){
	return view('site.imovel');
})->name('imovel');

Route::get('/admin/login', function(){
	return view('admin.login.index');
})->name('admin.login');

Route::post('/admin/login', 'Admin\UserController@login')->name('admin.login');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function(){
	return view('admin.site.home');
})->name('admin.home');
