
@if(App\Login::count() > 0)
    @foreach(App\Login::all() as $log)
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/buscar">Bienvenido {{ $log->NOMBRE }}</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a href="/logout" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">LogOut</a>
        </li>
    @endforeach
@else
<li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/login">Iniciar Sesion</a>
</li>
<li class="nav-item mx-0 mx-lg-1">
    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/sigin">Registrarse</a>
</li>
@endif


