<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universes</title>
</head>
<body>
    <h1>Gender</h1>
    <table>
        <thead>
        <tr>    
            <th>Id</th>
            <th>name</th>
        </tr>
        </thead>


        <tbody>
            @foreach ($universe as $item) 
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>