<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="/edit_value/{{$v->id}}" method="post">

        @csrf
        <label for="">ID</label>
        <input type="text" name="id" value="{{$v->id}}">
        <br><br>

        <label for="">NAME</label>
        <input type="text" name="name" value="{{$v->name}}">
        <br><br>

        <label for="">EMAIL</label>
        <input type="email" name="email" value="{{$v->email}}">
        <br><br>

        <label for="">PASSWORD</label>
        <input type="password" name="password" value="{{$v->password}}">
        <br><br>

        <label for="">ISADMIN</label>
        <input type="checkbox" name="isAdmin" value="{{$v->isAdmin}}">
        <br><br>
        <button type="submit">UPDATE</button>

    </form>


</body>

</html>