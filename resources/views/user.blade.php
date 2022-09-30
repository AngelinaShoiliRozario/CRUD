<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>User Account with form Validation</h1><br>
<form action="/postuser" method="post">
    {{@csrf_field()}}
<label for="name">Name:  </label>
<input type="text" placeholder="Name" name="name">

@error('name')
  <span style="color: red">{{$message}}</span>  
@enderror

<br><br><br>
<label for="email">Email:  </label>
<input type="email" placeholder="email" name="email"><br><br><br>

<label for="password">Password:  </label>
<input type="password" placeholder="Password" name="password"><br><br><br>

<button type="submit">Submitt</button>

       

</form>

</body>
</html>