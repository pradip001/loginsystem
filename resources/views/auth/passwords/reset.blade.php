@extends('layouts.app')

@section('content')
                <div>Reset Password</div>
                <form method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">
                <label> E-Mail Address</label>
                <input type="email" name="email"  >

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

                                @if ($errors->has('password_confirmation'))                     
                                    <p>{{ $errors->first('password_confirmation') }}</p>
                                @endif

                                <button type="submit">
                                    Reset Password
                                </button>
                    </form>
@endsection
