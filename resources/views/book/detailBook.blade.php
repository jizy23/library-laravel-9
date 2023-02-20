<x-layout>

    <div class="container vh-100">

        <h2 class="text-uppercase colorLightBrown text-center m-4">Dettaglio libro</h2>
    
        <div class="card m-5" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Titolo: {{$book->title}}</h5>
              <h6 class="card-subtitle mb-2">Autore: {{$book->author}}</h6>
              <p class="card-text">Anno di pubblicazione: {{$book->year}}</p>
              <p class="card-text">Trama: {{$book->trama}}</p>
            </div>
        </div>
 
    </div>

</x-layout>