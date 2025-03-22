<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>

    <form action="{{ route('universe.update', $universe->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $universe->name }}">
        <br><br>
        
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4">{{ $universe->description }}</textarea>
        <br><br>
        
        <input type="submit" value="Update">
    </form>
    
    <a href="{{ route('universe.index') }}">Back to list</a>
</body>
</html>