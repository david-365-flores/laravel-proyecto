<h1>Pelicula: {{ $pelicula->title }}</h1>
<form method="POST" action="{{route('reviews.store')}}">
    @csrf
    
    <label>Review</label>
    <input type="text" name="review">
    <label>Calificacion</label>
    <input type="integer" name="calificacion">
    <br>
    <input type="hidden" name="pelicula_id" value="{{ $pelicula->id }}">
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <button type="submit">Enviar</button>

</form>

