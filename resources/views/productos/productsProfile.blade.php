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
          <div class="categorias"><h5 class="nombre-categoria"> {{$producto->categoria->name}}</h5>
          @if($producto->subcategory_id != null)
          <h5 class="nombre-subcategoria">  | {{$producto->subcategoria->name}} </h5>
          @endif
        </div>
          <h6 class="descripcion-producto"> {{$producto->description}} </h6>
        </div>

        <div class="edicion">
          <a href="#" id="abrir">
            <h5 class="ver-fotos">VER</h5>
          </a>
        <a href="/productos/usuario/cargar_imagen/{{$producto->id}}" id="abrir">
            <h5 class="ver-fotos">CARGAR</h5>
          </a>
          <a href="#" id="abrir">
            <h5 class="ver-fotos">ELIMINAR</h5>
          </a>
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