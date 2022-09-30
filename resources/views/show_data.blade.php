<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 2px solid black;
            padding: 20px;
            border-collapse: collapse;
        }

        th {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>


    <h1>Database representation</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>IsAdmin</th>
            </tr>
        </thead>
        <tbody>

            @foreach($data as $val)
            </tr>

            <td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->email}}</td>
            <td>{{$val->password}}</td>
            <td>{{$val->isAdmin}}.......Yes/No.......</td>
            <td><a href="/delete/{{$val->id}}">Delete</a></td>
            <td><a href="/edit/{{$val->id}}">Edit</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

</body>

</html>