<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gender</title>
</head>
<body>
    <h1>{{ $gender->name }}</h1>
    
    <p><strong>ID:</strong> {{ $gender->id }}</p>
    
    <br>
    <a href="{{ route('gender.index') }}">Back to List</a>
</body>
</html>