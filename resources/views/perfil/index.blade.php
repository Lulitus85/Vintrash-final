@extends('layouts.master')
@section('content')
<div class="contenedorPerfil">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/userimg/01.jpg" alt="foto usuario"> <!--aca embebo la foto de perfil del usuario en la carta-->
        <div class="card-body">
            <p class="card-text">Bienvenid@ Pepe</p>      
        </div>
    </div>
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
        </section>
    </div>
</div>
@endsection