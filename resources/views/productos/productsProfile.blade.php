@extends('master')

@section('content')



            
<div class="caja-productos">

    <section class="productos-perfil">
      @foreach($productos as $producto)
            
      @if( $producto->user_id == Auth::user()->id)
      <article class="producto-individual">
           
        <div class="producto">
          <img class="imagen-producto" src="/storage/{{$producto->cover}}" alt="imagen de producto">
        </div>
        <div class="boton">
          <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
        </div>
        <div class="info">
          <h4 class="nombre-producto">  {{$producto->name}} </h4>
          <h5 class="nombre-categoria"> {{$producto->categoria->name}}</h5>
          @if($producto->subcategory_id != null)
          <h5 class="nombre-subcategoria"> {{$producto->subcategoria->name}} </h5>
          @endif
          <h6 class="descripcion-producto"> {{$producto->description}} </h6>
          <div class="edicion">
          <a href="#" id="abrir">
            <h5 class="ver-fotos">VER FOTOS</h5>
          </a>
          <a href="#" id="abrir">
            <h5 class="ver-fotos">AGREGAR FOTOS</h5>
          </a>
        </div>
        </div>
      </article>
        @endif
@endforeach

 {{--     <div id="miModal" class="modalito">
        <div id="flex" class="flex">
          <div class="contenido_modal">
            <span id="close" class="close"></span>
            <!--                 acá va un carrousel con las fotos del producto -->
            <img src="imagenesUsuarios/Productos/music.jpg" alt="">
          </div>
        </div>
      </div> --}}

    </section>

  </div>

  @endsection