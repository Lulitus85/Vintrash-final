@extends('layouts.master')

@section('content')

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>
<div class="offset-3 col-6">
    <h1 class="text-center"> {{$producto->name}}</h1>
    <br>
    <hr>
    <h3 class='text-center'> Agregar Imagenes al producto </h3>
    <form class="form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class=form-group style="display:none;">
            <input type="text" name= "product_id" value="{{$producto->id}}">
        </div>
        
        <div class="form-group">
            <label for="poster">Imagen</label>
            <input class="form-control" type="file" name="paths[]" multiple="multiple">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Agregar Película" id="addMovie">
        </div>
    </form>

@endsection