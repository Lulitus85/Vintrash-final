@extends('master')

@section('content')


<div class="__formularios">
<h1 class="__nuevasImagenes" style="text-align: center">Agregar Categoria</h1>
<hr>
<br>
<form class="form-group __formulario" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="categoria">Categoria Nombre</label>
        <input type="text" name="name" value=" " class="form-control">
    </div>
    <br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary __boton" value="Agregar Categoria" id="addCategory">
    </div>
</form>

</div> 
@endsection