<x-layout>
  
    <x-slot name="title">createBook</x-slot>
    
    <div class="container vh-100 ps-5 pe-5">
      
      <h2 class="colorSecondary text-center m-4">Aggiungi un libro</h2>
      
      <form action="{{route('updateBook', compact('book'))}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="mb-4">
          <label for="inputTitle" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" value="{{$book->title}}">
        </div>
        
        <div class="mb-4">
          <label for="inputAuthor" class="form-label">Autore</label>
          <input type="text" class="form-control" name="author" value="{{$book->author}}">
        </div>
        
        <div class="mb-4">
          <label for="inputYear" class="form-label">Anno di pubblicazione</label>
          <input type="text" class="form-control" name="year" value="{{$book->year}}">
        </div>
        
        
        <div class="mb-4">
          <label for="inputCover" class="form-label">Copertina</label>
          <input type="file" class="form-control" name="img">
        </div>
        
        <div class="mb-4 d-flex row">
          <label for="inputTrama" class="form-label">Trama</label>
          <textarea name="trama" cols="50" rows="3" type="text">{{$book->trama}}</textarea>
        </div>
        
        <div class="container text-center">
          <button class="button-74 m-3" role="button" type="submit"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
        
      </form>
      
      
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
    </div>
    
  </x-layout>