<form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name"><br><br>
    <label for="">Name</label>
    <input type="file" name="coverImg">
    <button type="submit">Create</button>
</form>
