<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superheroes</title>
    
</head>
<body>
    <h1>Superheroes</h1>

    <a href="{{ route('superhero.create') }}">Create New Superhero</a>


    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Universe</th>
            <th>Gender</th>
            <th>Picture</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($superheroes as $superhero) 
            <tr>
                <td>{{ $superhero->id }}</td>
                <td>{{ $superhero->name }}</td>
                <td>{{ $superhero->real_name }}</td>
                <td>{{ $superhero->universe->name }}</td>
                <td>{{ $superhero->gender->name }}</td>
                <td><img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="50"></td>

                <td>
                    <a href="{{ route('superhero.show', $superhero->id) }}">Show</a>
                    <a href="{{ route('superhero.edit', $superhero->id) }}">Edit</a>

                    <form action="{{ route('superhero.destroy', $superhero->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onClick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>