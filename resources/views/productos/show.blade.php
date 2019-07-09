@extends('layouts.master')
@section('content')

<div class="">
<section class="">
<article class="producto-perfil">
<div class="producto">
<img class="imagen-producto" src="/storage/{{$producto->cover}}" style="border-radius:3px;" alt="imagen de producto">
</div>

@if(Auth::user() == null)
<div class="boton">
<a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
</div>
@elseif(Auth::user()->id != $producto->user_id)
<div class="boton">
    <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
</div>
@endif


<div class="info" style="margin-top:0%">
<h4 class="nombre-producto"> {{$producto->name}} </h4>
<div class="categorias">
<h5 class="nombre-categoria"> {{$producto->categoria->name}}</h5>

@if($producto->subcategory_id != null)
<h5 class="nombre-subcategoria"> | {{$producto->subcategoria->name}} </h5>
@endif

</div>
<h6 class="descripcion-producto"> {{$producto->description}} </h6>
</div>
<div class="edicion">            
<a href="#">           
<h5 class="ver-fotos"  id="abrir" style="color:red;">VER FOTOS</h5>
</a>
<div id="miModal" class="modalito">
<div id="flex" class="flex">
<div class="contenido_modal">
<span id="close" class="close"></span>

@foreach($multimedias as $multimedia)
@if($multimedia->product_id !== null)
@if ($producto->id == $multimedia->product_id)
<img class="mySlides" src=" /storage/{{$multimedia->path}}" alt="">
@endif
@endif
@endforeach

<button class="w3-button w3-light-grey  w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-light-grey  w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</div>
</div>
</div>

</a>
@if(Auth::user() != null)
@if(Auth::user()->id == $producto->user_id)
<a href="/productos/usuario/cargar_imagen/{{$producto->id}}">
<h5 class="ver-fotos">CARGAR IMAGENES</h5>
</a>

<a href="editar/{{$producto->id}}" id="abrir">
<h5 class="ver-fotos">EDITAR PRODUCTO</h5>
</a>
@endif
@endif
</div>

</article>


</section>

</div>

@endsection