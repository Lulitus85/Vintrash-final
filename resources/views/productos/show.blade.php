@extends('layouts.master')
@section('content')  

<article class="producto-individual">
    <img class="imagen-producto" src="{{url('/storage/'. $product->cover)}}" alt="imagen de producto">
    @if(Auth::user() == null || Auth::user()->id != $product->user_id)
    <a href="#"><img class="solicitar" src="{{asset('img/solicitar_-01.svg')}}" alt="solicitar"></a>
    @endif
    <h4 class="nombre-categoria">{{$product->categoria->name}} </h4>
    <h5 class="nombre-subcategoria">{{$product->subcategoria->name}}</h5>
    <h5 class="nombre-producto">{{$product->name}} </h5>
    <a href="#"><h5 class="ver-fotos">VER FOTOS</h5></a>
</article>
@endsection