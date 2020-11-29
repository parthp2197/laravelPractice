<form methd="POST" action="{{ url('submit') }}">
{{ csrf_field()  }}
    <table>
        <tr>
            <td>email</td>
            <td><input type="email" name="email"><td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>#</td>
            <td><input type="submit" name="submit" value="LOGIN"></td>
        </tr>
    </table>
</form>