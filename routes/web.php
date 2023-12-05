<?php

use App\Models\Customer;
use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [DataController::class, "show"]);
Route::post('submit', [CustomerController::class, 'dataInsert']);
// Route::post('submit', function() {
//     return redirect()->back();
// });
// Route::get('/', [Customerontroller::class, 'sendMail']);
