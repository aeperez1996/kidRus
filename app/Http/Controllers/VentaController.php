<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();
        return view('admin.venta.index', compact('ventas'));
    }

    
    public function create()
    {   $clients = Client::get();
        return view('admin.venta.create', compact('clients'));
    }

    public function Store(StoreVentaRequest $request)
    {
       $Venta = Venta::create($request->all()); 

       foreach($request->product_id as $key => $product){
       $results[] = array("product_id"=>$request->product_id[$key],
       "quantity"=>$request->quantity[$key],
       "price"=>$request->price[$key]);
    }
       $Venta->ventaDetails()->createMany($results);
        return redirect()->route('Ventas.index');
    }

   
    public function show(Venta $Venta)
    {
        return view('admin.Venta.show', compact('ventas'));
    }

    
    public function edit(Venta $Venta)
    {     $clients = Client::get();
        return view('admin.Venta.show', compact('ventas'));
    }

    
    public function Update(UpdateVentaRequest $request, Venta $Venta)
    {
       // $Venta->Update ($request->all()); 
       // return redirect()->route('Ventas.index');
    }

    
    public function destroy(Venta $Venta)
    {
       // $Venta->delete()  ;
       // return redirect()->route('Ventas.index');
    }
}
