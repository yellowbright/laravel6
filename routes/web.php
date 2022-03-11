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

Route::get('/test1', function()
{
    sleep(3);
    header('Content-Type: text/css');
    echo 'body {background-color: blue;}';
});

Route::get('/test', function()
{
    return view('test');
});

use MatthiasMullie\Minify;
Route::get('/showcss', function()
{
    $public_path = public_path();
    $sourcePath = $public_path.'\css\mobile\header.css';
    $minifier = new Minify\CSS($sourcePath);
    // joined in 1 output file
    $sourcePath2 = $public_path.'/css/mobile/footer.css';
    $minifier->add($sourcePath2);
    // or just output the content
    return $minifier->minify();
});
