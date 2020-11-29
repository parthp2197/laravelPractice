<form mthod="POST" action="{{ url('authenticate') }}">
{{ csrf_field() }}

    <table>
        <tr>
            <td>emaiasdasdl</td>
            <td><input type="email" name="email" id="email">{{ $errors->first('email') }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password">{{ $errors->first('password') }}</td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" value="LOGHIN">
            </td>
        </tr>
        <tr>
            <td>
            <a href="{{ url('redirect') }}" class="btn btn-primary">Login With Google</a>
            </td>
        </tr>
    </table>

</form>