<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superhero</title>
</head>
<body>
    <h1>{{ $superhero->name }}</h1>
    
    <p><strong>ID:</strong> {{ $superhero->id }}</p>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->name }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender->name }}</p>
    
    @if($superhero->picture)
        <p><strong>Picture:</strong></p>
        <img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="200">
    @endif
    
    <br><br>
    <a href="{{ route('superhero.index') }}">Back to List</a>
</body>
</html>