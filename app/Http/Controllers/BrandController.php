<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brands\StoreRequest;
use App\Http\Requests\Brands\UpdateRequest;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(5);
        return view ('admin/brands/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/brands/create'); // llamar vista organizada
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Brand::create($request->all());

        if ($request->input('from') === 'products') {
            return to_route('products.index')->with('status', 'Marca registrada');
        }

        return to_route('brands.index') -> with ('status', 'Marca Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin/brands/show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        echo view ('admin/brands/edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brand $brand)
    {
        $data = $request->all();
        $brand->update($data);
        return to_route('brands.index') -> with ('status', 'Marca Actualizada');
    }

    public function delete(Brand $brand)
    {
        echo view ('admin/brands/delete', compact('brand'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route ('brands.index') -> with ('status', 'Marca Eliminada');
    }
}
