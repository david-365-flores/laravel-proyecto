<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seleccionar genero(s)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<h1>Seleccionar gennero para {{ $pelicula->title }}</h1>

    <form action="{{ route('pelicula.relacionar-genero-pelicula', $pelicula) }}" method="POST">
        @csrf
        <div class="form-group">
            <select name="genero_id[]" id="genero" class="form-control" multiple>
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}" @selected(false !== array_search($genero->id, $pelicula->generos->pluck('id')->toArray()))>{{ $genero->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- <input type="hidden" name="alumno_id" value="{{ $alumno->id }}"> --}}

        <input type="submit" value="Guardar" class="btn btn-primary">
    </form>
    </div>
        </div>
    </div>
</x-app-layout>