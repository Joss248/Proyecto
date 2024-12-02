<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::paginate(5);
        return view ('admin/addresses/index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::pluck('id', 'name');
        return view ('admin/addresses/create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Address::create($data);
        return to_route('addresses.index') -> with ('status', 'Dirección Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('admin/addresses/show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        $clients = Client::pluck('id', 'name');
        echo view ('admin/addresses/edit', compact('clients','address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $data = $request->all();
        $address->update($data);
        return to_route('addresses.index') -> with ('status', 'Dirreción Actualizada');
    }

    public function delete(Address $address)
    
    {
        echo view ('admin/addresses/delete', compact('address'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return to_route ('addresses.index') -> with ('status', 'Dirección Eliminada');
    }
}
