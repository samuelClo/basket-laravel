<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;

class BasketController extends Controller
{
    public function create(Request $request, Product $product)
    {
        $request->validate([
            'color'=>'required',
            'size' => 'required'
        ]);

        return redirect()->route('product', ['productId' => $request->shoes]);

    }
}
