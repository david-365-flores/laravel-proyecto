<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('pelicula.create')}}">Crear peli</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>year</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                    <tr>
                        <td>{{$pelicula->id}}</td>
                        <td>{{$pelicula->title}}</td>
                        <td>{{$pelicula->year}}</td>
                        
                        <td>
                        <form method="POST" action="{{route('pelicula.destroy', ['pelicula' => $pelicula->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete peli</button>
                            </form>
                            <a href="{{route('pelicula.edit', ['pelicula' => $pelicula->id])}}">Edit peli</a>
                            <a href="{{route('pelicula.show', ['pelicula' => $pelicula->id])}}">Show peli</a>
                            
                            <a href="{{route('pelicula.test', ['pelicula' => $pelicula->id])}}">Test</a>
                            <a href="{{route('pelicula.seleccionar-genero', ['pelicula' => $pelicula->id])}}">Genero</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>