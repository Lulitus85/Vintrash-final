@extends('master')
@section('content')


<div style="display:flex; justify-content:center; margin-top:5%">
    <div align="left" class="card" style="width:30rem" >
        <br>
        <h1  align="center">Editar Producto</h1>
        <form method="POST" action="/productos/usuario/{{$producto->id}}" style="padding:1em" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name"><b> Nombre </b></label>
                <input name="name" value="{{$producto->name}}" type="text" class="form-control"  placeholder="">
            </div>
            <div class="form-group">
                <label for="description"><b> Descripción </b></label>
            <input name="description" value={{$producto->description}}"" type="text" class="form-control"  placeholder="">
            </div>
            <div class="form-group">
                <label for="category_id"><b> Categoría </b></label>
                <select name="category_id" class="form-control" >
                    <option disabled selected value><b> Elija la categoría </b></option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $producto->categoria }}">{{ $categoria->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subcategory_id"><b> Sub Categoría </b></label>
                <select name="subcategory_id" class="form-control" >
                    <option disabled selected value><b> Elija la subcategoría </b></option>
                    @foreach ($subcategorias as $subcategoria)
                    <option value="{{ $subcategoria->id }}">{{ $subcategoria->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="d-flex md-form mt-0" style="justify-content:center">
                <a href="/productos/usuario" class="btn btn-primary" role ="button" >Volver</a>
                <button type="submit" class="btn btn-success" style="margin-left : 15px">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection

