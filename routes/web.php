<?php

use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thush', function () {
    return "<h1>thush page</h1>";
});
Route::get('/post', function () {
    return view('post');
});
//Route::view('hello','/post'); parameter: routename, viewname
Route::get('/post/firstpost', function () {
    return view('firstpost');
});
//Route for passing value
// Route::get('/post/{id}', function($for_id){
//     return "<h1>url passed value: ". $for_id . "</h1>";
// });
Route::get('/post/{id?}/comment/{commentid?}', function($for_id = null, $commentid = null){
    if($for_id){
        return "<h1>url passed value: ". $for_id .  "</h1><h2>" . $commentid . "</h2>";
    }
    else{
        return "No data given";
    }
});
//whereNumber(), whereAlpha(), whereIN('category', ['movie', 'song'])
// Where('id', '@[0-9]+');
//Route::redirect('/news', '/post', 301);
Route::prefix('page')->group(function(){

});