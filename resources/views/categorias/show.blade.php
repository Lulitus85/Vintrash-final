@extends('layouts.master')

@section('content')



<div class="caja-productos">

    <section class="productos-perfil">
        @foreach ($productos as $producto)
        @if($categoria->id == $producto->category_id)

        <article class="producto-individual">

            <div class="producto">
                <img class="imagen-producto" src="/storage/{{$producto->cover}}" alt="imagen de producto">
            </div>

            <div class="boton">
                <a href="#"><img class="solicitar" src="/img/solicitar_-01.svg" alt="solicitar"></a>
            </div>

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

            <a href="../productos/{{$producto->id}}" id="abrir">
                    <h5 class="ver-fotos">VER</h5>
                    <div id="miModal" class="modalito">
                        <div id="flex" class="flex">
                            <div class="contenido_modal">
                                <span id="close" class="close"></span>
                                <!--                 acá va un carrousel con las fotos del producto -->
                                @foreach($multimedias as $multimedia)
                                @if ($producto->id ==$multimedia->product_id)
                                <img class="mySlides" src=" /storage/{{$multimedia->path}}" alt="">

                                @endif
                                @endforeach
                                <button class="w3-button w3-light-grey  w3-display-left"
                                    onclick="plusDivs(-1)">&#10094;</button>
                                <button class="w3-button w3-light-grey  w3-display-right"
                                    onclick="plusDivs(+1)">&#10095;</button>
                            </div>
                        </div>
                    </div>
                </a>

            </div>



        </article>

        @endif
        @endforeach
    </section>

</div>

@endsection