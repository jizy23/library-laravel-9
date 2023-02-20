<x-layout>
  
  <x-slot name="title">createBook</x-slot>
  
  <div class="container vh-100">
    
    <h2 class="colorLightBrown text-center m-4">Aggiungi un libro</h2>
    
    <form action="{{route('storeBook')}}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="mb-4">
        <label for="inputTitle" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}">
      </div>
      
      <div class="mb-4">
        <label for="inputAuthor" class="form-label">Autore</label>
        <input type="text" class="form-control" name="author" value="{{old('author')}}">
      </div>
      
      <div class="mb-4">
        <label for="inputYear" class="form-label">Anno di pubblicazione</label>
        <input type="text" class="form-control" name="year" value="{{old('year')}}">
      </div>
      
      
      <div class="mb-4">
        <label for="inputCover" class="form-label">Copertina</label>
        <input type="file" class="form-control" name="img">
      </div>
      
      <div class="mb-4 d-flex row">
        <label for="inputTrama" class="form-label">Trama</label>
        <textarea name="trama" cols="50" rows="3" type="text">{{old('trama')}}</textarea>
      </div>
      
      <div class="container text-center">
        <button class="button-74 m-3" role="button" type="submit">Invio</button>
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