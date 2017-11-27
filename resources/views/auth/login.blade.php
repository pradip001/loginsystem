@extends('layouts.app')

@section('content')
                <div>Login</div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                            <label>E-Mail Address</label>
                            <br>
                            <input type="email" name="email">

                                @if ($errors->has('email'))
                                    
                                    {{ $errors->first('email') }}
                                    
                                @endif

                            <label>Password</label>
                            <br>
                            <input type="password" name="password" >

                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                            </div>
                                <button type="submit">
                                    Login
                                </button>

                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                    </form>
@endsection
