<?php

use Illuminate\Support\Facades\Route;

// QS
use Illuminate\Http\Request;

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

Route::get('/data/all', function(){
    return '{"data":"dddata"}';
});

Route::get('/data/all/ui', function(){
    return view('hi');
});

// Params - required
Route::get('/data/{id}', function(string $id){
    // (1)
    // return json_encode(['name' => 'name', 'data' => $id]);
    // (2)
    // return response()
        // -> json(['name' => 'name', 'data' => $id]);
    // (3)
    // return response(json_encode(['name' => 'name', 'data' => $id]))
    //     -> header('Content-Type', 'application/json');
    // (4)
    return response(['name' => 'name', 'data' => $id]);
    
});

// Params - none
Route::get('/data2/{id?}', function(string $id = "none"){
    return response($id, 200);
});

// QS
Route::get('/data3', function(Request $req){
    // $url = $req->url(); // QS 없이
    // $url = $req->fullUrl();
    $url = $req->query('id');
    return response($url, 200);
});

// Redirect
Route::get('/redi', function(){
    return redirect('/data/all');
});