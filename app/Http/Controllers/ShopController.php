<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function shopView()
    {
        return view('shop/shop');
    }
}
