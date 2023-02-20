<x-layout>

    <div class="container vh-100">

        <h2 class="text-uppercase colorLightBrown text-center m-4">Dettaglio libro: {{$book->title}}</h2>
    

        <div class="row container d-flex justify-content-center align-items-start">

            <div class="col-12 col-md-5">
                <h5 class="card-title mb-3">Titolo: {{$book->title}}</h5>
                <h6 class="card-subtitle mb-3">Autore: {{$book->author}}</h6>
                <p class="card-text">Anno di pubblicazione: {{$book->year}}</p>
                <p class="card-text">Trama: {{$book->trama}}</p>
            </div>

            <div class="col-12 col-md-5">
                <img src="{{Storage::url($book->img)}}" class="img-fluid" alt="" srcset="">
            </div>

        </div>
        

    </div>

</x-layout>