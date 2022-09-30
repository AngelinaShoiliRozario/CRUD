

    <form action="/checking" method="POST">
        @csrf
      
        <label for="">NAME</label>
        <input type="text" name="name">
        @error('name')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <br>
        <label for="">Email</label>
        <input type="email" name="email">
        @error('email')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
        @error('password')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <br>
        <label for="">IsAdmin</label>
        <input type="checkbox" name="isadmin">
        @error('isadmin')
         <p style="color:red;">{{$message}}</p>   
        @enderror
        <br>

        <button type="submit">Submit</button>
    </form>


