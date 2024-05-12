<h1>Pelicula: {{ $pelicula->title }}</h1>
<p>ID: {{ $pelicula->id }}</p>
<p>Year: {{ $pelicula->year }}</p>

<h2>Reviews</h2>
<ul>
    @foreach ($reviews as $review)
        <li>
            <strong>{{ $review->user->name }}:</strong> {{ $review->body }}
        </li>
    @endforeach
</ul>

<!-- Add more details as needed -->
<!-- <a href="{{ route('peliculas.edit', ['pelicula' => $pelicula->id]) }}">Edit pelicula</a> -->
<a href="{{ route('peliculas.index') }}">Back to peliculas</a>