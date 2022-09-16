<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\FeedbackController;

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

// Route::get('/message', function () {
//     return view('pages.emails.message-feedback');
// });
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/bantuan-pemesan', function () {
    return view('pages.bantuan_pemesan');
});
Route::get('/bantuan-pekerja', function () {
    return view('pages.bantuan_pekerja');
});
Route::get('/kebijakan-privasi', function () {
    return view('pages.privacy-policy');
});
Route::get('/syarat-ketentuan', function () {
    return view('pages.syarat-ketentuan');
});

Route::post('/feedback', [FeedbackController::class, 'feedback']);