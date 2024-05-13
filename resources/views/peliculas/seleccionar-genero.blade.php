<h1>Seleccionar gennero para {{ $pelicula->title }}</h1>

    <form action="{{ route('pelicula.relacionar-genero-pelicula', $pelicula) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="genero">Genero</label>
            <select name="genero_id[]" id="genero" class="form-control" multiple>
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}" @selected(false !== array_search($genero->id, $pelicula->generos->pluck('id')->toArray()))>{{ $genero->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- <input type="hidden" name="alumno_id" value="{{ $alumno->id }}"> --}}

        <input type="submit" value="Guardar" class="btn btn-primary">
    </form>