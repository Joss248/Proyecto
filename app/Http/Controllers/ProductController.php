<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Products\StoreRequest;
use Illuminate\Http\Request;
use tidy;

use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::get(); // Obtener todos los datos de la tabla
        $products = Product::paginate(3);
        return view ('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands = Brand::get(); Para obtener todos los datos de un modelo o tabla
        $brands = Brand::pluck('id', 'brand'); // Obtener datos específicos
       // dd($brands); // Verificar que los datos se extraen
        return view ('admin/products/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Registro Realizado";
        //dd($request);
        //}dd($request->all());

        $data = $request->all();

        //Si el campo imagen tiene información 
        if(isset($data["imagen"])){
            //Cambiat el nombre del archivo a cargar 
            $data["imagen"] = $filename = time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }

        Product::create($data);
        
        return to_route('products.index') -> with ('status', 'Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin/products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::pluck('id', 'brand');
        echo view ('admin/products/edit', compact('brands','product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        //Si el campo imagen tiene información 
        if(isset($data["imagen"])){
            //Cambiat el nombre del archivo a cargar 
            $data["imagen"] = $filename = time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }

        $product->update($data); // actualizamos los datos en la base de datos


        return to_route('products.index') -> with ('status', 'Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    
    {
        echo view ('admin/products/delete', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return to_route ('products.index') -> with ('status', 'Producto Eliminado');
    }


}
