<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductVariation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('frontend.index');
    }
}
