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
    public function show(Product $product)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}