<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Gender</title>
</head>
<body>
    <h1>Edit Gender</h1>

    <form action="{{ route('gender.update', $gender->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $gender->name }}">
        <br><br>
        
        <input type="submit" value="Update">
    </form>
    
    <a href="{{ route('gender.index') }}">Back to list</a>
</body>
</html>