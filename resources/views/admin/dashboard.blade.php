<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="background-color: red; color: white; padding: 10px; border: none; cursor: pointer;">
            Log Out
        </button>
    </form>
    <H1>postings</H1>
    <div>
        @if (session('status'))
            <div style="color: green;">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Year</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($postings as $posting)
                <tr>
                    <td>{{ $posting->id }}</td>
                    <td>{{ $posting->title }}</td>
                    <td>{{ $posting->content }}</td>
                    <td>{{ $posting->year }}</td>
                    <td><a href="{{ route('create.edit',['post' => $posting]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('create.destroy',['post' => $posting]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this posting?');">Delete</button>
                        </form>
                </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>