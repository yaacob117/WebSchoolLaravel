<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gender</title>
</head>
<body>
    <h1>Gender</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($genders as $gender)
            <tr>
                <td>{{ $gender->id }}</
                <td>{{ $gender->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('gender.create')}}">Create new gender</a>
</body>
</html>