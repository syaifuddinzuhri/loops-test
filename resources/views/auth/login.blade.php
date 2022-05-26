@extends('auth.layout')

@section('title_page', 'Login')

@section('contents')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1>LOGIN</h1>
                        <hr>
                        @if (\Session::has('success'))
                            @include('components.alert', ['type' => 'success', 'message' => Session::get('success')])
                        @endif
                        @if (\Session::has('error'))
                            @include('components.alert', ['type' => 'error', 'message' => Session::get('error')])
                        @endif
                        <form action="{{ route('auth.login') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                @error('email')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <small>
                            Don't already have an account?
                            <a href="{{ route('auth.showSignup') }}">Sign Up</a>
                        </small>
                        <br>
                        <small>
                            Back to
                            <a href="{{ route('home.index') }}">Home</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
