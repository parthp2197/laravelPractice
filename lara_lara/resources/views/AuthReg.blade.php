<form method="POST" action="{{ url('AuthReg') }}">
{{ csrf_field() }}
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td>#</td>
            <td><input type="submit" name="submit" id="submit" value="LOGHIN"></td>
        </tr>
    </table>
</form>