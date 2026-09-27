<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    Public function index()
    {
        return view('front.index');
    }
    public function ShopItem($id)
    {
        return view('front.detail');
    }
}
