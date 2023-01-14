
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid ">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link active " aria-current="page" href="/">Inicio</a>
          @guest
          {{-- Si no estas autenticado --}}
          <a class="nav-link text-white" href="/login">Inicio de sesion</a>
          @else
          {{-- Si si estas autenticado: --}}
          <a class="nav-link text-white" href="/profile">Perfil</a>
          <a class="nav-link text-white" href="#">Cerrar sesion</a> 
          @endguest
        </div>
      </div>
    </div>
</nav>