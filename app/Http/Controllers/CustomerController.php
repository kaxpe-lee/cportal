<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function inicio(){
        return view('customer.inicio');
    }
}
