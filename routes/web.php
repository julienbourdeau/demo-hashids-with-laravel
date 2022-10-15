<?php

use App\Models\Thing;
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
    return view('demo', [
        'things' => Thing::with('user')->get(),
    ]);
});

Route::get('/thing/{thing}', function (Thing $thing) {
    return $thing;
})->name('thing.id');

Route::get('/thg/{thg_hashid}', function (Thing $thing) {
    return $thing;
})->name('thing.hashid');
