@extends ('master')

@section('content')


@foreach ($productos as $producto)
    
<div class="card" style="width: 70rem;">

    <div class="card-body">
        <p class="card-text"> Nombre del producto : {{$producto->name}}</p>
        <br>
        <p class="card-text"> Descripción {{$producto->description}}</p>
        <br>
        @if($producto->cover !== null)
            <img src="/storage/{{ $producto->cover }}" alt="lala">
        @endif
    </div>

</div>    

<br>

@endforeach

@endsection