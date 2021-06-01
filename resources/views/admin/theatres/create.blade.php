<form action="add" method="post">
    @csrf
    <label for="name">Movie name:</label><br>
    <input type="text" name="name"><br>
    <label for="journer">Journer:</label><br>
    <input type="text" name="journer"><br>
    <label for="duration">Duration:</label><br>
    <input type="text" name="duration"><br>
    <input type="submit" value="Submit">
</form>
