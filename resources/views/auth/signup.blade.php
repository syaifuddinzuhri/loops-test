@extends('auth.layout')

@section('title_page', 'Signup')

@section('contents')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1>SIGN UP</h1>
                        <hr>
                        @if (\Session::has('error'))
                            @include('components.alert', ['type' => 'error', 'message' => Session::get('error')])
                        @endif
                        <form action="{{ route('auth.signup') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="emailHelp" placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                        <small>
                            Already have an account?
                            <a href="{{ route('auth.showLogin') }}">Login</a>
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
