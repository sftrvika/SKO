<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productView()
    {
        return view('product/product');
    }
}
