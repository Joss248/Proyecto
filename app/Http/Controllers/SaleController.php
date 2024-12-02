<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sales\StoreRequest;
use App\Http\Requests\Sales\UpdateRequest;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::paginate(5);
        return view ('admin/sales/index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::pluck('id', 'name');
        $products = Product::pluck('id', 'nameProduct');
        return view ('admin/sales/create', compact('clients','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        Sale::create($data);
        return to_route('sales.index') -> with ('status', 'Venta Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('admin/sales/show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        $clients = Client::pluck('id', 'name');
        $products = Product::pluck('id', 'nameProduct');
        return view ('admin/sales/edit', compact('clients','products','sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Sale $sale)
    {
        $data = $request->all();
        $sale->update($data);
        return to_route('sales.index') -> with ('status', 'Venta Actualizada');
    }

    public function delete(Sale $sale)
    {
        echo view ('admin/sales/delete', compact('sale'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return to_route ('sales.index') -> with ('status', 'Venta Eliminada');
    }
}
