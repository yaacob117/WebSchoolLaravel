<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universe</title>
</head>
<body>
    <h1>{{ $universe->name }}</h1>
    
    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Description:</strong> {{ $universe->description }}</p>
    
    <br>
    <a href="{{ route('universe.index') }}">Back to List</a>
</body>
</html>