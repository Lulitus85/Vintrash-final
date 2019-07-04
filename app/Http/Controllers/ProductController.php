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
        $multimedias = Multimedia::all();
        $producto = Product::find($id);
        return view('productos.show')->with('producto', $producto)
                                    ->with('multimedias', $multimedias);
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
/*         $multimedia = Multimedia::find($id); */
        $categorias = Category::all();
        $subcategorias = Subcategory::all();
        return view('productos.edit')->with('producto', $producto)
                                /*     ->with('multimedia', $multimedia) */
                                    ->with('categorias', $categorias)
                                    ->with('subcategorias', $subcategorias);
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
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
        ];
        $mensaje = [
            'required' => 'El campo :attribute es obligatorio.'
        ];


        $this->validate($request, $reglas, $mensaje);

        $producto = Product::find($id);
      
        $producto->name = $request->input('name') !== $producto->name ? $request->input('name') : $producto->name;
        $producto->description = $request->input('description') !== $producto->description ? $request->input('description') : $producto->description;
        $producto->category_id = $request->input('category_id') !== $producto->category_id ? $request->input('category_id') : $producto->category_id;
        $producto->subcategory_id = $request->input('subcategory_id') !== $producto->subcategory_id ? $request->input('subcategory_id') : $producto->subcategory_id;
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
        $producto = product::destroy($id);
        return redirect("/productos/usuario");
    }
}