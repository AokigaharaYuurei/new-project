<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Buyer;
use App\Models\category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $buyer = Buyer::find(1);
        $categories = category::all();
        return view("Product.index", compact('products', 'buyer', 'categories') );
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function create(Product $product)
    {
        return view('product.create');
    }
    public function store(Request $request, Product $product)
    {
        $data = $request -> validate([
            'name' => 'string',
            'price' => 'decimal:0,2',
            'description' => 'string'
        ]);
        $product->create($data);
        return redirect()->back();
    }
}
