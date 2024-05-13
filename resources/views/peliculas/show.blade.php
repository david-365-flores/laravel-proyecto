<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Titulo: {{ $pelicula->title }}</h1>
                <h2>Año: {{ $pelicula->year }}</h2>
                <h2>Generos</h2>
                <ul>
                        @foreach ($pelicula->generos as $genero)
                            <li>{{ $genero->nombre }}</li>
                        @endforeach
                    </ul>

                <h2>Reseña</h2>
                <ul>
                    @foreach ($reviews as $review)
                        <li>
                            <br>
                            <p>{{ $review->content }}</p>
                            <br>
                        </li>
                    @endforeach
                </ul>

                <br>

                <a href="{{ route('pelicula.index') }}">Back to peliculas</a>
            </div>
        </div>
    </div>
</x-app-layout>
