@extends('layouts.style')

@section('content')

<main class="register">
    <div class="cajita-texto">
      <h1>
      One man s trash is another man s treasure
      </h1>
      <p class="texto_bienvenida">
      <strong> VINTRASH </strong> es un espacio para que tú puedas buscar y
        encontrar, u ofrecer, todo aquello que te apasiona.
        Desde comics, libros, vinilos, cassettes, posters, figuras de
        colección en su empaque original, juegos, vhs, etc.
        Pequeñas o grandes reliquias, aquellas que para algunos
        quedaron en el olvido y que, para ti, son tesoros a encontrar.

        Las reglas son simples, somos un <strong>ecommerce de “intercambio”</strong>: solicitas un producto, el oferente ingresa a tu
        perfil y revisa si hay algo de su interés y, si lo encuentra,
        intercambian productos. <br>
        <b>Pero no te desanimes!</b> Si no tienes nada que ofrecer, que
        sea de interés para tu ofertante, el puede subastártelo!
        <br>
        <b> <i> Bienvenido a VINTRASH, donde el desecho de uno es
        el tesoro de otro. </i> </b>
      </p>
    </div>

    <div class="cajita2">
        @if(count($errors)>0)
          <span>
              <img class='boom' src="imagenespagina/BOOM-01.svg" alt="rompiste todo vieja">
          </span>  
        @endif
        <h1>Registro!</h1>
                    <form class="formularioRegister" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                      
                                <input class="inputForm" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder = 'Usuario' required autocomplete="name" autofocus>
                                        <div>
                                            @error('name')
                                                    <span class="error-registro" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                                
                          

                        
                                <input class="inputForm" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder = 'Email' required autocomplete="email">
                            <div>
                                @error('email')
                                    <span class="error-registro" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                <input class="inputForm" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder = 'Password' required autocomplete="new-password">
                                <div>
                                @error('password')
                                    <span class="error-registro" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        
                                <input class="inputForm" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder = 'Confirma la password' required autocomplete="new-password">
                            

                        <div class="button">
                            <p>Agrega tu Avatar</p>
                            <input class="avatar" type="file" name="avatar" value="{{ old('avatar') }}" />
                          </div>
                          <div>
                            @error('avatar')
                                      <span class="error-registro" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>

                            <p class="ldob" for="DOB">Fecha de Nacimiento</p>
                            <input class="dobBox" type="date" name="dob">
                          <br>
                          <div>
                          @error('dob')
                                    <span class="error-registro" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          <button class="submitRegister" type="submit" name="submit"> {{ __('Enviar') }}</button>
                      </form>
                </div>
            
      
@endsection
