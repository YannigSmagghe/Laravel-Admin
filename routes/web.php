<?php

Route::get('/', function()
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