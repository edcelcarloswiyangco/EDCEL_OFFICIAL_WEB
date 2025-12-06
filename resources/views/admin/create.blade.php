<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Posting</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('create.store') }}">
        @csrf
        @method('post')
        <div>
            <label >title</label>
            <input type="text" name="title" placeholder="title name" />
        </div>
        <div>
            <label >content</label>
            <input type="text" name="content" placeholder="content" />
        </div>
        <div>
            <label >year</label>
            <input type="text" name="year" placeholder="year" />
        </div>
        <div>
            <button type="submit">Create new post</button>
        </div>
    </form> 
</body>
</html>