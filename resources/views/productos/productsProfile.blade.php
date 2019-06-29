@extends('master')

@section('content')

<div class="container__">
  <div class="caja-productos">


  @foreach($productos as $producto)     
    @if( $producto->user_id == Auth::user()->id)    

    <section class="productos-perfil">
      <article class="producto-individual">
        <div class="producto">
          <img class="imagen-producto" src="/storage/{{$producto->cover}}" alt="imagen de producto">
        </div>
        <div class="boton">
          <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
        </div>
        <div class="info">
          <h4 class="nombre-categoria"> {{$producto->category_id}} </h4>
          <h5 class="nombre-subcategoria">Subcategoria: </h5>
          <h5 class="nombre-producto">Producto: {{$producto->name}} </h5>
          <h6 class="descripcion-producto"> {{$producto->description}} </h6>
          <a href="#" id="abrir">
            <h5 class="ver-fotos">VER FOTOS</h5>
          </a>
        </div>
      </article>
    </section>

    @endif
  @endforeach

 {{--  <div class="form-group">
    <a href="{{view('productos.productsProfile')}}">Agregar nuevo producto</a>
  </div>
 --}}
 {{--     <div id="miModal" class="modalito">
        <div id="flex" class="flex">
          <div class="contenido_modal">
            <span id="close" class="close"></span>
            <!--                 acá va un carrousel con las fotos del producto -->
            <img src="imagenesUsuarios/Productos/music.jpg" alt="">
          </div>
        </div>
      </div> --}}

  </div>
</div>

  @endsection