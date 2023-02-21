<x-layout>

    <x-slot name="title">indexBook</x-slot>


    <div class="container vh-100">

        <h2 class="text-uppercase colorDarkBrown text-center m-4">Libreria</h2>

        <div class="row container d-flex justify-content-center">

            {{-- card --}}
            @foreach ($books as $book)        
            <div class="card m-4 cardBook" style="width:18rem; height:12rem;">
                {{-- <img src="{{Storage::url($book->img)}}" class="img-fluid" alt="" srcset=""> --}}
                <div class="card-body cardBook">
                  <h6 class="card-title">Titolo: {{$book->title}}</h6>
                  <p class="card-subtitle mb-2">Autore: {{$book->author}}</p>
                  <a href="{{route('detailBook', compact('book'))}}">
                    <button href="{{route('detailBook', compact('book'))}}" class="button-74 m-2" role="button"><i class="fa-brands fa-readme"></i></button>
                  </a>
                </div>
            </div>
            @endforeach
            {{-- end card --}}

        </div>
        
    </div>

</x-layout>