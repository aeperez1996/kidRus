<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\User;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
    }

    
    public function create()
    {   $categories = User::get();
        return view('admin.purchase.create', compact('users'));
    }

    public function Store(StorePurchaseRequest $request)
    {
       $purchase = Purchase::create($request->all()); 

       foreach($request->product_id as $key => $product){
       $results[] = array("product_id"=>$request->product_id[$key],
       "quantity"=>$request->quantity[$key],
       "price"=>$request->price[$key]);
    }
       $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchases.index');
    }

   
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchases'));
    }

    
    public function edit(Purchase $purchase)
    {   $users = User::get();
        return view('admin.purchase.show', compact('purchases'));
    }

    
    public function Update(UpdatePurchaseRequest $request, purchase $purchase)
    {
       // $purchase->Update ($request->all()); 
       // return redirect()->route('purchases.index');
    }

    
    public function destroy(Purchase $purchase)
    {
       // $purchase->delete()  ;
       // return redirect()->route('purchases.index');
    }
}
