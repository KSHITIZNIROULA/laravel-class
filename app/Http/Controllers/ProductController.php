<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view("product.product");
    }

    public function maformho(){
        return view("form.form");
    }
}
