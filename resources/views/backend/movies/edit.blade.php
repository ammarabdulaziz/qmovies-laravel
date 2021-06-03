<form action="/update/{{ $movie[0]->movie_id }}" method="post">
    @csrf
    {{-- {{ print_r($movie[0]) }}
    {{ exit() }} --}}
    <label for="name">Movie name:</label><br>
    <input type="text" name="name" value="{{ $movie[0]->name }}"><br>
    <label for="journer">Journer:</label><br>
    <input type="text" name="journer" value="{{ $movie[0]->journer }}"><br>
    <label for="duration">Duration:</label><br>
    <input type="text" name="duration" value="{{ $movie[0]->duration }}"><br>
    <input type="submit" value="Submit">
</form>
