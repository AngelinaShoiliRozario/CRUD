<h1>REGISTRATION PAGE</h1><br>

<form action="/postregister" method="post">
    {{csrf_field()}}

    <label>Name</label>
    <input type="text" name="name">

    @error('name')
    <p>{{$message}}</p>
    @enderror

    <br><br>
    <label>Email</label>
    <input type="email" name="email">

    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <br><br>

    <label>Password</label>
    <input type="password" name="password"><br><br>

    @error('password')
    <p>{{$message}}</p>
    @enderror

    <br><br>
    <label>Is Admin</label>
    <input type="checkbox" name="isAdmin"><br><br>


    <input type="submit" value="Register">

</form>