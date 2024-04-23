<table border="1" cellpadding="10" style="margin-bottom: 20px">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <img src="{{ $item->image }}" alt="" width="50">
                </td>
                <td>
                    <a href="{{ route('teacher.edit', $item->id) }}">Edit</a>
                    <a href="{{ route('teacher.show', $item->id) }}">Show</a>
                    {{-- <a href="{{ route('teacher.destroy',$item->id) }}">Show</a> --}}
                    <form action="{{ route('teacher.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('teacher.create') }}"
    style="color: white;
    background: #089cd7;
    padding: 8px 30px;
    border-radius: 2px;
    text-decoration: none;
    margin-top: 200px;">Create</a>
