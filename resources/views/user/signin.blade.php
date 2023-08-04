@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign In</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('user.signin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">
                Sign In
            </button>
        </form>
        <p>Don´t have an account? <a href="{{ route('user.signup') }}">Sign Up</a></p>
    </div>
</div>
@endsection