<h1>Titulo: {{ $pelicula->title }}</h1>
<h2>Año: {{ $pelicula->year }}</h2>
<h2>Generos</h2>
<ul>
        @foreach ($pelicula->generos as $genero)
            <li>{{ $genero->nombre }}</li>
        @endforeach
    </ul>

<h2>Reviews</h2>
<ul>
    @foreach ($reviews as $review)
        <li>
            <p>{{ $review->user->name }} said:</p>
            <p>{{ $review->content }}</p>
        </li>
    @endforeach
</ul>

<a href="{{ route('pelicula.index') }}">Back to peliculas</a>
