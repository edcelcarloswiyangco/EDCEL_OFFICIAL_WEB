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
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Year</th>
            </tr>
            
            
        </table>
    </div>
    
</body>
</html>