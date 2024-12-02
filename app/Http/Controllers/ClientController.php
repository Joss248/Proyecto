<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreRequest;
use App\Http\Requests\Clients\UpdateRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(5);
        return view ('admin/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Client::create($request->all());

        if ($request->input('from') === 'sales') {
            return to_route('sales.index')->with('status', 'Cliente registrado');
        }

        return to_route('clients.index') -> with ('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('admin/clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        echo view ('admin/clients/edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        $data = $request->all();
        $client->update($data);
        return to_route('clients.index') -> with ('status', 'Cliente Actualizado');
    }

    public function delete(Client $client)
    {
        echo view ('admin/clients/delete', compact('client'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route ('clients.index') -> with ('status', 'Cliente Eliminado');
    }
}
