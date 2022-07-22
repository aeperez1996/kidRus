<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Http\Requests\StoreTagsRequest;
use App\Http\Requests\UpdateTagsRequest;
use phpDocumentor\Reflection\DocBlock\Tags as DocBlockTags;

class TagssController extends Controller
{
    public function index()
    {
        $Tagss = Tags::get();
        return view('admin.Tags.index', compact('Tagss'));
    }

    
    public function create()
    {
        return view('admin.Tags.create');
    }

    public function Store(StoreTagsRequest $request)
    {
       Tags::create($request->all()); 
       return redirect()->route('Tagss.index');
    }

   
    public function show(Tags $Tags)
    {
        return view('admin.tags.show', compact('tagss'));
    }

    
    public function edit(Tags $Tags)
    {
        return view('admin.tags.show', compact('Tagss'));
    }

    
    public function Update(UpdateTagsRequest $request, Tags $Tags)
    {
        $Tags->Update  ($request->all()); 
        return redirect()->route('tagss.index');
    }

    
    public function destroy(Tags $Tags)
    {
        $Tags->delete()  ;
        return redirect()->route('tagss.index');
    }

}
