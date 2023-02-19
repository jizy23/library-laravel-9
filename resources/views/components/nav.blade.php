<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          {{-- <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a> --}}
          <a class="nav-link active" href="{{route('indexBook')}}">Libreria</a>
          <a class="nav-link active" href="{{route('createBook')}}">Aggiungi libro</a>
        </div>
      </div>
    </div>
</nav>