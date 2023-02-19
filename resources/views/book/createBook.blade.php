<x-layout>

    <x-slot name="title">createBook</x-slot>
   
    <h2>Aggiungi un libro</h2>

    <form action="{{route('storeBook')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="inputTitle" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="inputAuthor" class="form-label">Autore</label>
            <input type="text" class="form-control" name="author">
        </div>

          <div class="mb-3">
            <label for="inputYear" class="form-label">Anno di pubblicazione</label>
            <input type="number" class="form-control" name="year">
          </div>


          <div class="mb-3">
            <label for="inputTrama" class="form-label">Trama</label>
            <textarea name="trama" cols="50" rows="5" type="text"></textarea>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>