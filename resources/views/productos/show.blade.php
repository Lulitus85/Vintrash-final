@extends('master')

@section('content')



<div class="caja-productos offset-4 col-2">

        <section class="productos-perfil">
            <article class="producto-individual">
                <div class="producto">
                    <img class="imagen-producto" src="/storage/{{$producto->cover}}" style="border: 3px solid black; border-radius:3px;" alt="imagen de producto">
                </div>
                
    
    {{-- @if($producto->user_id != Auth::user()->id)  -->PARA QUE NO SE VEA EL SOLICITAR SI SOS EL DUEÑO DEL PERFIL --}}
    <div class="boton">
        <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
    </div>
    {{-- @endif --}}
    <div class="info">
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
    
     {{--    <a href="#" id="abrir"> --}}
            
        <a href="#">
           
            <h5 class="ver-fotos"  id="abrir" style="color:red;">VER MÁS!</h5>
          </a>
          
            <div id="miModal" class="modalito">
                <div id="flex" class="flex">
                    <div class="contenido_modal">
                        <span id="close" class="close"></span>
                        @foreach($multimedias as $multimedia)
                        @if($multimedia->product_id !== null)
                        <!--                 acá va un carrousel con las fotos del producto -->
                       {{--  @foreach($multimedias as $multimedia) --}}
                        @if ($producto->id ==$multimedia->product_id)
                        <img class="mySlides" src=" /storage/{{$multimedia->path}}" alt="">
                        @endif
                        {{-- @endforeach --}}
                        @endif
                        @endforeach
        
                        <button class="w3-button w3-light-grey  w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    
                        <button class="w3-button w3-light-grey  w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                    </div>
                </div>
            </div>
            {{-- @if($producto->user_id == Auth::user()->id)  -->PARA QUE NO SE VEA EL CARGAR Y ELIMINAS SI NO EL DUEÑO DEL PERFIL --}}
        </a>
        <a href="/productos/usuario/cargar_imagen/{{$producto->id}}">
            <h5 class="ver-fotos">CARGAR IMAGENES</h5>
        </a>
    
        <a href="{{$producto->id}}/editar" id="abrir">
            <h5 class="ver-fotos">EDITAR PRODUCTO</h5>
        </a>
        {{-- @endif --}}
    
    </div>
    
    </article>


    </section>
    
    </div>

@endsection

