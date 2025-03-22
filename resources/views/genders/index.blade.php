<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genders</title>
</head>
<body>
    <h1>Genders</h1>

    <a href="{{ route('gender.create') }}">Create New Gender</a>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($genders as $gender) 
            <tr>
                <td>{{ $gender->id }}</td>
                <td>{{ $gender->name }}</td>
                <td>
                    <a href="{{ route('gender.show', $gender->id) }}">Show</a>
                    <a href="{{ route('gender.edit', $gender->id) }}">Edit</a>

                    <form action="{{ route('gender.destroy', $gender->id) }}" method="post">
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