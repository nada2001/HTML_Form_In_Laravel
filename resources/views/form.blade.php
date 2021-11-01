<html>
    <body>
        <center>User Login</center>
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
                
            @endforeach
            
        @endif
            <form action="form" method="POST">
                @csrf
                <label>Username:</label> <input type="text" placeholder="username" name="username">
                <br> <br>
                <label>Password</label> <input type="password" placeholder="password" name="password"> <br> <br>
                <button type="submit" name="submite">Submit</button>
            </form>
    </body>
</html>