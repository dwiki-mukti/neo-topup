@extends('layouts.admin')
@section('title', 'Transaction Detail')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-capitalize">Transaction Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right text-capitalize">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('admin.transaction.index') }}">Transaction</a>
                        </li>
                        <li class="breadcrumb-item active">Transaction Detail</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaction Detail</h3>
                </div>
                <div class="row p-1">
                    <div class="col-md-8 p-2 border-right">

                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            @foreach ($items as $item)
                            <dl>
                                <dt>ID</dt>
                                <dd>{{ $item->id }}</dd>

                                <dt>Invoice</dt>
                                <dd>{{ $item->invoice }}</dd>

                                <dt>User</dt>
                                <dd>{{ $item->user->name }}</dd>

                                <dt>Payment Id</dt>
                                <dd>{{ $item->payment_id }}</dd>

                                <dt>Nominal</dt>
                                <dd>{{ $item-> nominal }}</dd>

                                <dt>Status</dt>
                                <dd>
                                    @if($item->status=="success")
                                    <p class="badge badge-success">{{$item->status}}</p>
                                    @else
                                    <p class="badge badge-danger">{{$item->status}}</p>
                                    @endif
                                </dd>
                            </dl>
                            @endforeach
                            <a class="btn btn-primary w-100" href='#' onclick="history.back()">Back</a>
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
    $('#bar-transaksi').addClass('active')
    $('#btn-create').click(function() {
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