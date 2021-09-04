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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/user/{name?}/{lastname?}/{age?}', function($name = '', $lastname = '', $age = 0){
    $message = 'Ciao '.$name.' '.$lastname;
    if($age){
        $message .= ' la tua età è di '.$age.' anni';
    }
    return view('home',['message' => $message]);
})->where([
    'name' => '[a-zA-Z]+',
    'lastname' => '[a-zA-Z]+',
    'age' => '[1-9]{1,3}'
]);

Route::get('/world', function() {
    $data = [
        'title' => 'HelloWorld'
    ];
    return view('world', $data);
})->name('world');

Route::get('/json', function() {
    $data = [
        'title' => 'HelloWorld'
    ];
    return $data; //return array parsificato in automatico da laravel in json
});
