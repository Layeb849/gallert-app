<form action="{{ route('studentinfo.store') }}" method="post">
    @csrf
    <input type="text" name="student_id">
    <label for="">Phone</label>
    <input type="text" name="phone"><br><br>
    <label for="">Email</label>
    <input type="email" name="email"><br><br>
    <label for="">Address</label>
    <input type="text" name="address"><br><br>
    <button type="submit">Create</button>
</form>
