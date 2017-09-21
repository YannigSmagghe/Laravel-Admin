<?php

Route::get('/home', function()
{
    return View('pages.home');
});
Route::get('about', function()
{
    return View('pages.about');
});
Route::get('projects', function()
{
    return View('pages.projects');
});
Route::get('contact', function()
{
    return View('pages.contact');
});
Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/login', 'Auth\LoginController@showAdmin');


Route::get('/tables', function()
{
    return View('pages.tables');
});

Route::get('/index', function()
{
    return View('pages.home-admin');
});
