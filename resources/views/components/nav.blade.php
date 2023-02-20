<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <i class="fa-solid fa-book-open fs-2 colorNeutro"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto text-uppercase">
          <a class="nav-link colorNeutro" aria-current="page" href="{{route('welcome')}}">Home</a>
          <a class="nav-link colorNeutro" href="{{route('indexBook')}}">Libreria</a>
          <a class="nav-link colorNeutro" href="{{route('createBook')}}">Aggiungi un libro</a>
        </div>
      </div>
    </div>
</nav>