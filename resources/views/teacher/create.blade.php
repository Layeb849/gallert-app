

<form style="margin: 40px auto; background-color:antiquewhite; width:20%; padding:20px" action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">name</label><br>
    <input type="text" name="name"><br><br>
    <label for="">email</label><br>
    <input type="text" name="email"><br><br>
    <label for="">phone</label><br>
    <input type="text" name="phone"><br><br>
    <label for="">image</label><br>
    <input type="file" name="image"><br><br>
    <button type="submit">submit</button>
</form>
<a style="margin: auto; background-color:aqua; padding:7px 10px " href="{{ route('teacher.index') }}">index</a>
