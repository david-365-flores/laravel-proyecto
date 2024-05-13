<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{route('pelicula.store')}}">
                @csrf
                <label>Titulo</label>
                <input name="title">
                <label>Año</label>
                <input name="year">

                <button type="submit">Guardar</button>
                

            </form>
            </div>
        </div>
    </div>
</x-app-layout>
