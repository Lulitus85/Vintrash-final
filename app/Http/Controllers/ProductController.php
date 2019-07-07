<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
Use App\Category; //recordemos son solo 4, hot stuff es por hits.
Use App\Subcategory;
Use App\Multimedia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Category::all();
        $subcategorias=Subcategory::all();
        return view('productos.create')
                ->with('categorias',$categorias)
                ->with('subcategorias',$subcategorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $reglas = [
            'name'=>'required',
            'description'=>'required',
            /* 'active'=>'required',
            'hits'=>'required', */
            'user_id'=>'required',
            'category_id'=>'required',
            /* 'subcategory_id'=>'required' */
        ];

        $mensaje=[
            'el :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensaje);

        $cover = $request->file('cover')->store('covers','public');

        $producto = new Product($request->all());

        $producto->cover = $cover;

        $producto->save();

        return redirect('/categorias');
    }

    public function showProducts()
    {
        $multimedias = Multimedia::all();
        $products = Product::all();
        return view('productos.productsProfile')
                    ->with('productos',$products)
                    ->with('multimedias',$multimedias);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Product::find($id);
        $multimedias=Multimedia::all();
        return view('productos.show')
                ->with('producto',$producto)
                ->with('multimedias',$multimedias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $producto = Product::find($id);
            $categorias = Category::all();
            $subcategorias = Subcategory::all();
            $photos = Multimedia::all();

            return view('productos.editar')
                ->with('producto', $producto)
                ->with('categorias', $categorias)
                ->with('subcategorias', $subcategorias)
                ->with('photos', $photos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $reglas = [
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'subcategory_id' => 'required',
        ];

        $mensaje = [
            'required' => 'el campo :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensaje);

        $producto = Product::find($id);

         $producto->name = $request->input('name') !== $producto->name ? $request->input('name') : $producto->name;

         $producto->description = $request->input('description') !== $producto->description ? $request->input('description') : $producto->description;
         $producto->category_id = $request->input('category_id') !== $producto->category_id ? $request->input('category_id') : $producto->category_id;
         $producto->subcategory_id = $request->input('subcategory_id') !== $producto->subcategory_id ? $request->input('subcategory_id') : $producto->subcategory_id;

         /* if($request->input('cover') !== null){
            $cover = $request->file('cover')->store('covers','public');
            $producto->cover = $cover;
            $producto->save();
            return redirect("/productos/usuario");
         } ---> ASÍ LO HABIAMOS HECHO. ES UN INPUT PERO HAY QUE LLAMARLO COMO FILE.*/

         if($request->file('cover') !== null){
            $cover = $request->file('cover')->store('covers','public');
            $producto->cover = $cover;
         }
         
         $producto->save();

         return redirect("/productos/usuario");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Product::find($id);
        $producto->delete();
        return redirect("/productos/usuario");
    }
}
