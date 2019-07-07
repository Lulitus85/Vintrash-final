@extends('layouts.master')
@section('content')
<section class="user">
    <article class="user-content">        
        <div class="user-avatar">
            <img src="{{asset("img/userimg/raven.jpg")}}" alt="foto usuario">
        </div>
        <div class="user-details">
            <h1>Fak</h1>
            <p class="user-motto" contenteditable="true">"Do or do not, there is no try" (Yoda)</p>
        <div class="data">
            <ul class="icons">
            <li><img src="{{asset("img/admiration_marc-01.svg")}}" alt=""></li>
                <li>Mensajes</li>
                <li>Reseñas</li>                
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
            <article class="producto-individual">
                <img class="imagen-producto" src="img/productimages/5cec1f0f6f3b7.jpg" alt="imagen de producto">
                <a href="#"><img class="solicitar" src="img/solicitar_-01.svg" alt="solicitar"></a>
                <h4 class="nombre-categoria">Lectura </h4>
                <h5 class="nombre-subcategoria">Subcategoria: </h5>
                <h5 class="nombre-producto">Producto: </h5>
                <a href="#"><h5 class="ver-fotos">VER FOTOS</h5></a>
            </article>
            <article class="producto-individual">
                    <img class="imagen-producto" src="img/productimages/5cec1f0f6f3b7.jpg" alt="imagen de producto">
                    <a href="#"><img class="solicitar" src="img/solicitar_-01.svg" alt="solicitar"></a>
                    <h4 class="nombre-categoria">Lectura </h4>
                    <h5 class="nombre-subcategoria">Subcategoria: </h5>
                    <h5 class="nombre-producto">Producto: </h5>
                    <a href="#"><h5 class="ver-fotos">VER FOTOS</h5></a>
                </article>
                <article class="producto-individual">
                        <img class="imagen-producto" src="img/productimages/5cec1f0f6f3b7.jpg" alt="imagen de producto">
                        <a href="#"><img class="solicitar" src="img/solicitar_-01.svg" alt="solicitar"></a>
                        <h4 class="nombre-categoria">Lectura </h4>
                        <h5 class="nombre-subcategoria">Subcategoria: </h5>
                        <h5 class="nombre-producto">Producto: </h5>
                        <a href="#"><h5 class="ver-fotos">VER FOTOS</h5></a>
                    </article>    
        </section>
    </div>

@endsection

