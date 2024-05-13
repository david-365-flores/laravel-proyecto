<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{route('pelicula.store')}}" class="px-4 py-8">
                @csrf
                <div class="mb-4">
                    <label>Titulo</label>
                    <input name="title" class="w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:w-1/2">
                </div>
                <div class="mb-4">
                    <label>Año</label>
                    <input name="year" class="w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:w-1/2">
                </div>
                <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>