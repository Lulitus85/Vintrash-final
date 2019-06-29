@extends('master')

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
    <h1 class="text-center">Agregar Fotos</h1>
    <form class="form-group" action="" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group" style="display:none;">
            <input type="text" name="product_id" value="{{$producto->id}}" class="form-control" multiple>
        </div>

        <div class="form-group">
            <label for="descripcion">Seleccionar</label>
            <input type="file" name="path" value="" class="form-control" multiple>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" class="form-control" value="Finalizar" id="">
        </div>

    </form>

@endsection