<h1>{{ $pelicula->title }}</h1>
<p>Year: {{ $pelicula->year }}</p>
<p>{{ $pelicula->description }}</p>
<a href="{{ route('peliculas.index') }}">Back to movies list</a>