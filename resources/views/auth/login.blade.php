<x-layout>

    <x-slot name="title">login</x-slot>
  
      <div class="container vh-100">

           <h2 class="colorTertiary text-center m-4">Accedi</h2>
  
          <form method="POST" action="{{route('login')}}">
              @csrf

              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
              </div>

              <div class="container text-center">
                <button class="button-74 m-3" role="button" type="submit">Invia</button>
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