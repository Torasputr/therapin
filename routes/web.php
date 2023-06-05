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
// Route::get('/create', function() {
//     return view('appointment');
// });
// Route::post('/create', function() {
//     $customer = new Customer();
//     $customer->name = request('name');
//     $customer->email = request('email');
//     $customer->phone = request('phone');
//     $customer->appointmentDate = request('appointmentDate');
//     $customer->department = request('department');
//     $customer->doctor = request('doctor');
//     $customer->save();
//     return redirect('/');
// });
// Route::get('/', [Customerontroller::class, 'sendMail']);
