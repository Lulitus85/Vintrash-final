@extends('layouts.stylelogin')

@section('content')
<main class="login">
    <div class="cajita">
            @if(count($errors)>0)
            <span>
                <img class='crash' src="imagenespagina/crash-01.svg" alt="rompiste todo vieja">
            </span>  
          @endif
            <h1>Inicio sesion!</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                       
                                <input class="inputLogin" id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="error-login" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         

                                <input class="inputLogin" id="password" type="password" placeholder = 'Password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="error-login" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        <div >
                            <div >
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu password?') }}
                                    </a>
                                @endif
                                <br>
                               
                            </div>
                        </div>
                        <div class="form-check">
                                     
                                   
                                <p>Recordarme<input class="form-check" class="check" type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}></p>
                              
                            </div>
                        <div >
                            <div>
                                <button type="submit" class="submitLogin">
                                    {{ __('Enviar') }}
                                </button>                              
                            </div>
                        </div>
                    </form>
                </div>
            </main>
@endsection
