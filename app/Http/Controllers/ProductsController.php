<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return response()
            ->json($products);
    }

    public function delete($id) {
        $product = Product::find($id);

        $product->delete();
    }
}
