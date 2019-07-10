@if(Auth::user() != null)
<nav class="navbar navbar-expand-lg navbar-light bg-light">     
    <a class="navbar-brand" href="/"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav cascadaUno">      
            <li class="nav-item dropdown">
                <a class="nav-link usuario dropdown-toggle" data-toggle="dropdown" href="/profile">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu cascadaDos">
                    <li class="borderli">
                        <a href="/profile">Perfil</a>
                    </li>
                    <li>
                        <a href="#">Editar Perfil</a>
                    </li>
                    <li class="borderli">
                        <a href="#">Configuración</a>
                    </li>
                    <li>
                        <a href="/logout">Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Search</a>
            </li>
        </ul>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
        </ul>
    </div>
</nav>
@endif