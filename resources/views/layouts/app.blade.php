<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'pradip login system') }}</title>

</head>
<body>

                    <a href="{{ url('/') }}">
                        {{ config('app.name', 'My login system') }}
                    </a>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                <a href="#"  role="button">
                                    {{ Auth::user()->name }}
                                </a>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endguest


        @yield('content')
</body>
</html>
