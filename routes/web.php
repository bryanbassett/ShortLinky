<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;
use App\Models\ShortLink;

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

Route::post('generate-shorten-link', [ShortLinkController::class,'store'])->name('generate.shorten.link.post');

Route::get('{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');
Route::get('/view/{code}', [ShortLinkController::class,'shortenLinkInfo'])->name('info.link');

