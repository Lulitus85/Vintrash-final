@extends('master') 
@section('content')
        
<div class="caja-productos">

    <section class="productos-perfil">

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
                <button class="ver-fotos">VER GALERIA</button>
            </a>

            <form method="POST" action="{{$producto->id}}">
                @method('DELETE')
                @csrf
                <button type="submit" value="BORRAR REGISTRO" style="margin-left : 15px">BORRAR</button>
            </form>

        </div>

        <div id="miModal" class="modalito">
          <div id="flex" class="flex">
          <div class="contenido_modal">
            <span id="close" class="close"></span>
            <!--                 acá va un carrousel con las fotos del producto -->
         @foreach($multimedias as $multimedia)
            @if($multimedia->product_id == $producto->id)
            <img src="/storage/{{$multimedia->path}}" alt="">
            @endif
         @endforeach   
          </div>
        </div>
      </div>

      </article>
{{--         @endif
@endforeach --}}

 {{--    <div id="miModal" class="modalito">
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