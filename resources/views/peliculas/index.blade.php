<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de peliculas') }}
        </h2>
    </x-slot>

    <style>
                            .button-blue {
                            background-color: #007bff;
                            color: #ffffff;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            }
                            </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('pelicula.create')}}">Crear peli</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Año</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                    <tr>
                        <td>{{$pelicula->title}}</td>
                        <td>{{$pelicula->year}}</td>
                        
                        <td>
                        <form method="POST" action="{{route('pelicula.destroy', ['pelicula' => $pelicula->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: red; color: white;">Eliminar</button>
                                <br>

                            </form>
                            
                            
                            <a href="{{route('pelicula.edit', ['pelicula' => $pelicula->id])}}" class="button-blue">Editar</a>
                            <a href="{{route('pelicula.show', ['pelicula' => $pelicula->id])}}" class="button-blue">Detalles</a>
                            <a href="{{route('pelicula.seleccionar-genero', ['pelicula' => $pelicula->id])}}" class="button-blue">Seleccionar Genero(s)</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>