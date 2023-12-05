<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Testimony;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function show() {
        $doctors = Doctor::all();
        $testimonies = Testimony::all();
        $images = Gallery::all();
        return view('welcome', ['doctors' => $doctors, 'testimonies' => $testimonies, 'images' => $images]);
    }
}
