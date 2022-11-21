@extends('layouts.client')

@section('content')
    <div class="page-content">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="text-capitalize">Change Password</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('profile-settings.index') }}">profile
                                    settings</a></li>
                            <li class="breadcrumb-item active" aria-current="dashboard">Change Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="row">
            <div class="col-12">
                <form action="{{ Route('change-password.update') }}" class="card" method="post"
                    enctype="multipart/form-data">
                    @CSRF
                    @METHOD('POST')
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label for="old_password">Old Password</label>
                            <input type="password" name="old_password"
                                class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                                placeholder="Input Your Old Password"
                                value="{{ old('old_password') ?? Auth::user()->old_password }}">
                            @error('old_password')
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if (Session::has('old_password'))
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ Session('old_password') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Input New Password">
                            @error('password')
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirm</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" placeholder="Confirm New Password">
                            @error('password_confirmation')
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end gap-1">
                        <a href="{{ Route('profile-settings.index') }}" class="btn btn-light-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
