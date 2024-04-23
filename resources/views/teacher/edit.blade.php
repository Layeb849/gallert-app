<form action="{{ route('teacher.update', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">name</label><br>
    <input type="text" name="name" value="{{ $data->name }}"><br><br>
    <label for="">Email</label><br>
    <input type="text" name="email" value="{{ $data->email }}"><br><br>
    <label for="">phone</label><br>
    <input type="text" name="phone" value="{{ $data->phone }}"><br><br>
    <label for="">Image</label><br>
    <input type="file" name="image" value="{{ $data->image }}"><br><br>
    <button type="submit">submit</button>
</form>
<a href="{{ route('teacher.index') }}" style="color: white;
background: green;
padding: 8px 30px;
border-radius: 2px;
text-decoration: none;
margin-top: 10px;">Index</a>
