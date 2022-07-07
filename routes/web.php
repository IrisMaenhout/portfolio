<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShowPdfController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/cv', [ShowPdfController::class, "downloadPdf"]);
// Route::get('/cv', [ShowPdfController::class, "showPdf"]);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
// Route::get('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/project', function () {
    return view('project');
});
