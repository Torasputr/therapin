<?php

use App\Models\Customer;
use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SessionController;

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
Route::get('/login', [SessionController::class, 'index']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::post('/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register', [SessionController::class, 'create']);
// Route::post('submit', function() {
//     return redirect()->back();
// });
// Route::get('/', [Customerontroller::class, 'sendMail']);
