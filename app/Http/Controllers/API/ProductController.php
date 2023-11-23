<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        dd($products);

        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }




    public function show($slug) {
        $product = Product::with('categories')->where('slug', $slug)->first();

        if ($product) {
            return response()->json([
                'success' => true,
                'product' => $product
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'product' => 'product not found'
            ]);
        }
    }
}
