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
                <div class="row p-1">
                    <div class="col-md-7 p-2 border-right">
                        <div class="card-body">
                            @foreach ($user as $users)
                            <dl>
                                <dt>Name</dt>
                                <dd>{{ $users->name }}</dd>

                                <dt>Role</dt>
                                <dd>{{ $users->role }}</dd>

                                <dt>E-mail</dt>
                                <dd>{{ $users->email }}</dd>

                                <dt>Saldo Coin</dt>
                                <dd>{{ $users->saldo_coin }}</dd>
                            </dl>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <dl>
                                <dt>Transaction's History</dt>
                                
                                @foreach ($transaction as $transactions)

                                <dt>ID Transaction</dt>
                                <dd>{{ $transactions->id }}</dd>

                                <dt>Invoice</dt>
                                <dd>{{ $transactions->invoice }}</dd>

                                <dt>Payment Id</dt>
                                <dd>{{ $transactions->payment_id }}</dd>

                                <dt>Nominal</dt>
                                <dd>{{ $transactions-> nominal }}</dd>

                                <dt>Status</dt>
                                <dd>
                                    @if($transactions->status=="success")
                                    <p class="badge badge-success">{{$transactions->status}}</p>
                                    @elseif($transactions->status=="waiting")
                                        <p class="badge badge-warning">{{$transactions->status}}</p>
                                    @else
                                        <p class="badge badge-danger">{{$transactions->status}}</p>
                                    @endif
                                </dd>
                            </dl>
                            @endforeach
                            <a class="btn btn-primary mt-2 w-100" href='#' onclick="history.back()">Back</a>
                        </div>
                    </div>
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