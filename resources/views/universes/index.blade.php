<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universes</title>
</head>
<body>
    <h1>Universes</h1>

    <a href="{{ route('universe.create') }}">Create New Universe</a>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($universes as $universe) 
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->name }}</td>
                <td>{{ $universe->description }}</td>
                <td>
                    <a href="{{ route('universe.show', $universe->id) }}">Show</a>
                    <a href="{{ route('universe.edit', $universe->id) }}">Edit</a>

                    <form action="{{ route('universe.destroy', $universe->id) }}" method="post">
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