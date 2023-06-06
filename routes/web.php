<?php

use App\Http\Controllers\MailController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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
Route::post('submit', [CustomerController::class, 'dataInsert']);

// Route::post('submit', function() {
//     return redirect()->back();
// });
// Route::get('/', [Customerontroller::class, 'sendMail']);
