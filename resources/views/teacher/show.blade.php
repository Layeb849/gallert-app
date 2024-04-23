<table border="1" cellpadding="10">
    <thead>
        <tr>
            {{-- <td>Id</td> --}}
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Image</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            {{-- <td>{{ $data->id }}</td> --}}
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td><img src="{{ $data->image }}" alt="" width="20px"></td>
        </tr>
    </tbody>
</table>

<a href="{{ route('teacher.index') }}" style="color: white;
    background: green;
    padding: 8px 30px;
    border-radius: 2px;
    text-decoration: none;
    margin-top: 10px;">Index</a>

