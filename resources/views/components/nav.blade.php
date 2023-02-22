<nav class="navbar navbar-expand-lg sticky-top mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <i class="fa-solid fa-book-open fs-2 colorPrimary"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav me-auto text-uppercase">
          <a class="nav-link colorPrimary" aria-current="page" href="{{route('welcome')}}">Home</a>
          <a class="nav-link colorPrimary" href="{{route('indexBook')}}">Libreria</a>
          <a class="nav-link colorPrimary" href="{{route('createBook')}}">Aggiungi un libro</a>
        </div>
        
        
        <div class="navbar-nav ms-auto text-uppercase">
          
          @guest
          <a class="nav-link colorPrimary" href="{{route('login')}}">Accedi</a>
          <a class="nav-link colorPrimary" href="{{route('register')}}">Registrazione</a>
          
          @else
          {{-- {{Auth::user()->name}} --}}
          <a class="nav-link colorPrimary" href="{{route('logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
            </form>

          @endguest

        </div>
      </div>
    </div>
</nav>