<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blogView()
    {
        return view('blog');
    }
}
