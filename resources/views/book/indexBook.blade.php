<x-layout>

    <x-slot name="title">indexBook</x-slot>

    <h2 class="text-uppercase">Libreria</h2>

    {{-- card --}}
    @foreach ($books as $book)        
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Titolo: {{$book->title}}</h5>
          <h6 class="card-subtitle mb-2">Autore: {{$book->author}}</h6>
          <p class="card-text">Anno di pubblicazione: {{$book->year}}</p>
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    @endforeach
    {{-- end card --}}

</x-layout>