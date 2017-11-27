@extends('layouts.app')

@section('content')
                <div>Reset Password</div>
                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                            <label for="email" >E-Mail Address</label>
                                <input type="email" name="email" >

                                @if ($errors->has('email'))
                                        <p>{{ $errors->first('email') }}</p>
                                @endif
                                <button type="submit">
                                    Send Password Reset Link
                                </button>
                                </form>
@endsection
