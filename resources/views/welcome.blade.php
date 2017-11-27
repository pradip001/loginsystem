<!doctype html>
<html>
    <head>
        <title>login system</title>

            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
            @endif
            <p> Pradip Login System </p>
    </body>
</html>
