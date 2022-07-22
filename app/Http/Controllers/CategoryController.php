<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }

    
    public function create()
    {
        return view('admin.category.create');
    }

    public function Store(StoreCategoryRequest $request)
    {
       Category::create($request->all()); 
       return redirect()->route('categories.index');
    }

   
    public function show(Category $category)
    {
        return view('admin.category.show', compact('categories'));
    }

    
    public function edit(Category $category)
    {
        return view('admin.category.show', compact('categories'));
    }

    
    public function Update(UpdateCategoryRequest $request, Category $category)
    {
        $category->Update  ($request->all()); 
        return redirect()->route('categories.index');
    }

    
    public function destroy(Category $category)
    {
        $category->delete()  ;
        return redirect()->route('categories.index');
    }
}
