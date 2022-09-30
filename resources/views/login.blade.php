<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   


<h1>LOGIN PAGE</h1>

<form action="/checkrole" method='POST'>
    @csrf
    <label >Enter Email</label>
    <input type="email" name='email'>
    <br> <br>
    <label ">Enter Password</label>
    <input type="password" name='password'> <br> <br>
    <input type="submit" value="Login" />
</form>
</body>
</html>