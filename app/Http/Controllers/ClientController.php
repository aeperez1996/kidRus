<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('admin.client.index', compact('clients'));
    }

    
    public function create()
    {
        return view('admin.client.create');
    }

    public function Store(StoreClientRequest $request)
    {
        Client::create($request->all()); 
       return redirect()->route('clients.index');
    }

   
    public function show(Client $client)
    {
        return view('admin.client.show', compact('client'));
    }

    
    public function edit(Client $client)
    {
        return view('admin.client.show', compact('client'));
    }

    
    public function Update(UpdateClientRequest $request, Client $client)
    {
        $client->Update  ($request->all()); 
        return redirect()->route('clients.index');
    }

    
    public function destroy(Client $client)
    {
        $client->delete()  ;
        return redirect()->route('clients.index');
    }
}
