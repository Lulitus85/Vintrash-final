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

        // La logica de hacer un update es la siguiente:
        // Tenemos el personaje A, que se llama Request, y el personaje B, que se 
        // llama Movie.
        // El personaje Request trae data que puede ser nueva o no, y el personaje Movie
        // se para adelante y dice "compara con todo lo que tengo yo". Si el valor de un 
        // campo de Request es igual a lo que ya tiene Movie, no hay cambio. Si es diferente,
        // Movie atrapa el cambio y lo guarda, borrando el dato que tenia antes.

        // En codigo:
        $producto = Product::find($id);

        // Explicacion con el primer campo/atributo
         $producto->name = $request->input('name') !== $producto->name ? $request->input('name') : $producto->name;
         // El titulo va a ser igual a lo que salga de este if ternario.
         // El if ocurre antes del signo de pregunta, "lo que llega de Request, NO ES igual a lo que producto ya tiene?"
         // si NO es igual, pone lo que llego, si es igual, queda como esta.
         $producto->description = $request->input('description') !== $producto->description ? $request->input('description') : $producto->description;
         $producto->category_id = $request->input('category_id') !== $producto->category_id ? $request->input('category_id') : $producto->category_id;
         $producto->subcategory_id = $request->input('subcategory_id') !== $producto->subcategory_id ? $request->input('subcategory_id') : $producto->subcategory_id;

         if($request->input('cover') !== null){
            $cover = $request->file('cover')->store('covers','public');
            $producto->cover = $cover;
            $producto->save();
            return redirect("/productos/usuario");
         }
        /*  $producto->cover = $request->input('cover') !== null ? $request->input('cover') : $producto->cover;

         //una vez que terminamos el proceso anterior, simplemente hacemos:
         $cover = $request->file('cover')->store('covers','public');
         $producto->cover = $cover; */
         
         $producto->save();
         // y vamos a ver los cambios:
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
