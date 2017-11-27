@extends('layouts.app')

@section('content')
                <div>Register</div>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                            <label>Name</label>
                                <input type="text" name="name">

                                @if ($errors->has('name'))
                                        <p>{{ $errors->first('name') }}</p>
                                @endif

                            <label>E-Mail Address</label>
                                <input  type="email" name="email">

                                @if ($errors->has('email'))
                                        <p>{{ $errors->first('email') }}</p>
                                @endif
                            <label>Password</label>
                                <input type="password" name="password" >

                                @if ($errors->has('password'))
                                    
                                        <p>{{ $errors->first('password') }}</p>
                                @endif
                            <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" >

                                <button type="submit">
                                    Register
                                </button>
                    </form>
                    @endsection
