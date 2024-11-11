<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="type" placeholder="Type" required></textarea>
    <textarea name="power_points" placeholder="Power Points" required></textarea>
    <button type="submit">Create Pokemon</button>
</form>