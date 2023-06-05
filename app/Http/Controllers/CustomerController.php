<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    function dataInsert(Request $request) {
        $name = $request->input('name');
        $isInsertSuccess = Customer::insert(['name'=>$name]);
        if($isInsertSuccess) echo "success";
        else echo "error";
   }
}
