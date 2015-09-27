<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showProfile()
    {
        //$users= DB::table('product_detail')->get();
        return view('index');//->withUsers($users);
    }
}
