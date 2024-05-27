<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profileView()
    {
        return view('profile/profileuser');
    }
    function profileEdit()
    {
        return view('profile/editprofileuser');
    }
}
