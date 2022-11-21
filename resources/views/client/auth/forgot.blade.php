@extends('layouts.client')

@section('content')
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                <div class="text-center my-2">
                    <a href="{{ route('client.landing') }}" class="h3">{{ env('APP_NAME') }}</a>
                </div>
                <p class="login-box-msg mb-2">You forgot your password? Here you can easily retrieve a new password.</p>
                <form method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-envelope-fill"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block my-btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in
                    </a>
                </div>

                <p class="mb-1">
                    <a href="{{ route('client.login') }}">Login</a>
                </p>
            </div>
        </div>
    </div>
@endsection
