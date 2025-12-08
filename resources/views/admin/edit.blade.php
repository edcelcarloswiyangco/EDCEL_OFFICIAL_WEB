<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Posting</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('create.update',['post' => $post->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label >title</label>
            <input type="text" name="title" placeholder="title name" value="{{ $post->title }}" />
        </div>
        <div>
            <label >content</label>
            <input type="text" name="content" placeholder="content" value="{{ $post->content }}" />
        </div>
        <div>
            <label >year</label>
            <input type="text" name="year" placeholder="year" value="{{ $post->year }}" />
        </div>
        <div>
            <button type="submit" value="save a new update">Update</button>
        </div>
    </form> 
</body>
</html>