@extends('layouts.app')

@section('content')
                <div>Dashboard</div>
                    @if (session('status'))
                      <p>    {{ session('status') }} </p>
                    @endif
                    <p>You are logged :) !!! </p>
@endsection
