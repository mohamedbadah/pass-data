<?php

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\RequestEvent;

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

// Route::get('/laravel', function () {
//     return view('welcome');
// });
// Route::view('/welcome', 'welcome');
// Route::get('/about', function () {
//     $name = "mohamed";
//     return view('about')->with('n', $name);
// });
Route::get('/about', function () {
    $name = "mohamed";
    $age = 22;
    return view('about', compact("name", "age"));
});
Route::post('sent', function (HttpRequest $r) {
    $name = $r->myName;
    $age = 22;
    return view('about', compact('name', 'age'));
});
