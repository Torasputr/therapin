<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    function dataInsert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $appointmentDate = $request->input('appointmentDate');
        $department = $request->input('department');
        $doctor = $request->input('doctor');
        $publishedAt = $request->input('publishedAt');

        $isInsertSuccess = Customer::insert(['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'appointmentDate'=>$appointmentDate, 'department'=>$department, 'doctor'=>$doctor, 'publishedAt'=>$publishedAt]);
        if($isInsertSuccess) {
            Mail::to('mailtrap.club@gmail.com')->send(new CustomerMail($name, $appointmentDate, $department, $doctor));
            return redirect()->back();
        }
        else {
            echo "error";
        } 
   }
}
