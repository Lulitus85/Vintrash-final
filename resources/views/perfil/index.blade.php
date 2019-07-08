@extends('layouts.master')
@section('content')
<section class="user">
    <article class="user-content">        
        <div class="user-avatar">
        <img src="{{url('/storage/avatars/'. $user->avatar)}}" alt="foto usuario">
        </div>
        <div class="user-details">
            <h1>{{$user->name}}</h1>
            <p class="user-motto" contenteditable="true">"Insertar frase chistosa"</p>
        <div class="data">
            <ul class="icons">
            <li><img src="{{asset("img/admiration_marc-01.svg")}}" alt=""></li>
                <li>Mensajes</li>
                <li><a href="/productos/cargar">Agregar producto</a></li>                
            </ul>       
            <ul class="details">
                <li>Ofertas 102</li>
                <li>Demandas 185</li>
                <li>Intercambios 88</li>
                <li>Compras 2</li>
                <li>Ventas 0</li>
            </ul>
        </div>
        </div>
    </article>
</section>
    <div class="caja-productos">        
        <section class="productos-perfil">    
            @foreach($products as $product)            
            <article class="producto-individual">
                <img class="imagen-producto" src="{{url('/storage/'. $product->cover)}}" alt="imagen de producto">
                @if(Auth::user()->id != $product->user_id)
                <a href="#"><img class="solicitar" src="img/solicitar_-01.svg" alt="solicitar"></a>
                @endif
                <h4 class="nombre-categoria">{{$product->categoria->name}} </h4>
                <h5 class="nombre-subcategoria">{{$product->subcategoria->name}}</h5>
                <h5 class="nombre-producto">{{$product->name}} </h5>
                <a href="/productos/{{$product->id}}"><h5 class="ver-fotos">Ver Detalle</h5></a>
            </article>
            @endforeach
                  
        </section>
    </div>
@endsection

