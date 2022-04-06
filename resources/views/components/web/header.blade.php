<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        
      </a>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Catalogo</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Mayorista</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Tracking</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Ayuda</a></li>
        </ul>
  
        <div class="col-md-3 text-end">

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Mi cuenta</a>
                @else

                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        </div>
      </header>


</div>