<x-layout>

    <x-slot name="title">Home</x-slot>

    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        
        @guest
            <h1 class="text-uppercase colorLightBrown">Welcome home</h1>
        @else
            <h1>Libreria di {{Auth::user()->name}}</h1>
        @endguest

    </div>

</x-layout>