<x-layout>

    <div class="container vh-100">

        <h2 class="text-uppercase colorTertiary text-center m-4">Dettaglio libro: {{$book->title}}</h2>
    

        <div class="row container-flex boxDetailBook d-flex justify-content-center align-items-start">

            <div class="col-12 col-md-5 d-flex flex-column justify-content-center align-items-start">
                <h5 class="card-title mb-3">Titolo: {{$book->title}}</h5>
                <h6 class="card-subtitle mb-3">Autore: {{$book->author}}</h6>
                <p class="card-text">Anno di pubblicazione: {{$book->year}}</p>
                <p class="card-text">Trama: {{$book->trama}}</p>
            </div>

            <div class="col-12 col-md-5 m-5">
                <img src="{{Storage::url($book->img)}}" class="img-fluid" alt="" srcset="">
            </div>

        </div>

        <div class="container text-center">
            <a href="{{route('editBook', compact('book'))}}">
                <button  class="button-74 m-3" role="button" type="submit"><i class="fa-solid fa-pen-to-square"></i></button>
            </a>
          </div>
        

    </div>

</x-layout>