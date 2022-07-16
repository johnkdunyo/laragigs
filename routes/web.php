<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Gig;
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

Route::get('/home', function() {
    return view('gigs', [
        'heading'=>'Latest Gigs Listings',
        'gigs' => Gig::All()
    ]);
});


Route::get('/gig/{id}', function($id) {
    return view('gig', [
        'gig' => Gig::find($id)
    ]);
});


// Route::get('/hello', function() {
//     return response('<h1> Hello</h1>');
// });


// Route::get('/post/{id}', function($id) {
//     // debugging
//     ddd($id);
//     return response('Post '. $id);
// });


// Route::get('/search', function(Request $request){
//     dd($request);
// });