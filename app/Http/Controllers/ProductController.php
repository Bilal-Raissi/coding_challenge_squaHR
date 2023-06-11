<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get products with pagination
    public function index()
    {
        $products = Product::paginate(5);
        return response()->json($products);
    }

    // Save a new product
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    // Get one product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Edit product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    // Delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
