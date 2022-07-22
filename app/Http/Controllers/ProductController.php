<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    
    public function create()
    {   $categories = Category::get();
        return view('admin.product.create', compact('categories'));
    }

    public function Store(StoreProductRequest $request)
    {
       Product::create($request->all()); 
       return redirect()->route('products.index');
    }

   
    public function show(Product $Product)
    {
        return view('admin.product.show', compact('products'));
    }

    
    public function edit(Product $Product)
    {   $categories = Category::get();
        return view('admin.product.show', compact('products','categories'));
    }

    
    public function Update(UpdateProductRequest $request, Product $product)
    {
        $product->Update ($request->all()); 
        return redirect()->route('products.index');
    }

    
    public function destroy(Product $product)
    {
        $product->delete()  ;
        return redirect()->route('products.index');
    }
}

  



