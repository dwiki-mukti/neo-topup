@extends('layouts.client')

@section('content')
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-3 mt-2">
                    <a href="{{ route('client.landing') }}" class="h3">{{ env('APP_NAME') }}</a>
                    <h5 class="mt-2">Masuk ke akun</h5>
                </div>
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-lock-fill"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
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
                    <a href="{{ route('client.forgot') }}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('client.register') }}" class="text-center">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>
@endsection
