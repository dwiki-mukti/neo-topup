@extends('layouts.admin')
@section('title', 'User')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-capitalize">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right text-capitalize">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('admin.user.index') }}">User</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Saldo Coin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                            <tr>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->role }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->saldo_coin }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#bar-user').addClass('active')
    $('#btn-detail').click(function() {
        $('#exampleModalCenter').modal('show')
    })
    $('#close_create_item').click(function() {
        $('#exampleModalCenter').modal('hide')
    })
    $('#new_item_next').click(function() {
        location.href = "{{ route('admin.item.create') }}/" + $('#new_item_product').val()
    })
})
</script>
@endsection