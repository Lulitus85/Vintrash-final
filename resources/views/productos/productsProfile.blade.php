@extends('master')

@section('content')



<div class="caja-productos">

    <section class="productos-perfil">
        @foreach($productos as $producto)

        @if($producto->user_id == Auth::user()->id)
        {{-- Actualmente estamos viendo el perfil de usuario solo si el usuario id es == al user_ide del producto, Tenemos que arma la logica que se vea los productos de "ESE PERFIL" PERFIL FULANITO==PRODUCTOS DE FULANITO --}}


        <article class="producto-individual">

            <div class="producto">
                <img class="imagen-producto" src="/storage/{{$producto->cover}}" style="border: 3px solid black; border-radius:3px;" alt="imagen de producto">
            </div>
            {{-- Empieza el carrousel --}}
            {{-- <div class="producto"> --}}
                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">  
                          <div class="producto">
                            <img class="d-block imagen-producto" src="/storage/{{$producto->cover}}" alt="First slide">
                          </div>
                        </div>

                        @foreach($multimedias as $multimedia)
                        @if ($producto->id ==$multimedia->product_id)
                        <div class="carousel-item">
                          <div class="producto">
                            <img class="imagen-producto w-100" src="/storage/{{$multimedia->path}}" alt="">
                          </div>
                        </div>
                        @endif
                        @endforeach
 --}}

                        {{--   <img class="d-block w-100" src="..." alt="First slide">
                  --}}

                        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:rgba(0,0,0,.5)"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"style="background-color:rgba(0,0,0,.5)"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> --}}
            {{-- </div> --}}


            {{-- Termina el carrousel --}}

            {{-- <div class="producto">
          <img class="imagen-producto" src="/storage/{{$producto->cover}}" alt="imagen de producto">
</div> --}}



    @if($producto->user_id == Auth::user()->id)

        <div class="boton" style="display:none">
            <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
        </div>
    
        <div class="info" style="margin-top:0%">
            <h4 class="nombre-producto"> {{$producto->name}} </h4>
            <div class="categorias">
                <h5 class="nombre-categoria"> {{$producto->categoria->name}}</h5>
                @if($producto->subcategory_id != null)
                <h5 class="nombre-subcategoria"> | {{$producto->subcategoria->name}} </h5>
                @endif
            </div>
            {{-- <h6 class="descripcion-producto"> {{$producto->description}} </h6> --}}
        </div>
    @endif

<div class="edicion">

 {{--    <a href="#" id="abrir"> --}}
   <a href="/productos/{{$producto->id}} ">
        <h5 class="ver-fotos" style="color:red;">VER MÁS!</h5>
      </a>
{{--         <div id="miModal" class="modalito">
            <div id="flex" class="flex">
                <div class="contenido_modal">
                    <span id="close" class="close"></span>
                    <!--                 acá va un carrousel con las fotos del producto -->
                    @foreach($multimedias as $multimedia)
                    @if ($producto->id ==$multimedia->product_id)
                    <img class="mySlides" src=" /storage/{{$multimedia->path}}" alt="">
                    @endif
                    @endforeach

                    <button class="w3-button w3-light-grey  w3-display-left" onclick="plusDivs(-1)">&#10094;</button>

                    <button class="w3-button w3-light-grey  w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                </div>
            </div>
        </div> --}}
        {{-- @if($producto->user_id == Auth::user()->id)  -->PARA QUE NO SE VEA EL CARGAR Y ELIMINAS SI NO EL DUEÑO DEL PERFIL --}}
    </a>
{{--     <a href="/productos/usuario/cargar_imagen/{{$producto->id}}">
        <h5 class="ver-fotos">CARGAR FOTOS</h5>
    </a> --}}

    <a href="{{$producto->id}}/editar" id="abrir">
        <h5 class="ver-fotos">EDITAR</h5>
    </a>
    {{-- @endif --}}

</div>

</article>
@endif
@endforeach

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