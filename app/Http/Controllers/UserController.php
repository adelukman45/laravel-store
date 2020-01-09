<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    public function index()
    {
    	$view = [
    		'products' => Product::paginate(12),
    		'carousels' => Product::paginate(3),
    	];

    	return view('user', $view);
    }
}
