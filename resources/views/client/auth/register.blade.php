@extends('layouts.client')

@section('content')
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-3 mt-2">
                    <a href="{{ route('client.landing') }}" class="h3">{{ env('APP_NAME') }}</a>
                    <h5 class="mt-2">Daftar pengguna baru</h5>
                </div>
                <form method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-person-fill"></span>
                            </div>
                        </div>
                    </div>
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-lock-fill"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="text-center mt-2 mb-4">
                    <a href="#" class="btn btn-block my-btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Daftar
                    </a>
                </div>

                <p class="mb-0">
                    <a href="{{ route('client.login') }}" class="text-center">I already have a membership</a>
                </p>
            </div>
        </div>
    </div>
@endsection
