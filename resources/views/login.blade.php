<h1>Login Form</h1>
<form method="post" action="loginformsubmitt">
    {{csrf_field()}}
    <table>
        <tr>
            <td>Email Id </td>
            <td><input type="email" name="email">
            <span style="color:red">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        
        </td>
        </tr>
        <tr>
            <td>Password </td>
            <td><input type="textbox" name="password">
            <span style="color:red">
                @error('password')
                    {{$message}}
                @enderror
            </span></td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" name="submit">

            <span style="color:red">
            {{session('error')}}
            </span>
        
        </td>
        </tr>
    </table>
</form>