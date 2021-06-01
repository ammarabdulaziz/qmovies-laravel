<a href="/add">Add</a>
<table>
    <tr>
        <th>Movie Name</th>
        <th>Journer</th>
        <th>Duration</th>
        <th>Edit</th>
        <th>delete</th>
    </tr>
    @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->journer }}</td>
            <td>{{ $movie->duration }}</td>
            <td><a href="/edit/{{ $movie->movie_id }}">edit</a></td>
            <td><a href="/delete/{{ $movie->movie_id }}">delete</a></td>
        </tr>
    @endforeach
</table>
