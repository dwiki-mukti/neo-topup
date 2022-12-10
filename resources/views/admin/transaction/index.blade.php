@extends('layouts.admin')
@section('title', 'Transaction')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-capitalize">Transaction</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right text-capitalize">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Transaction</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaction</h3>
                </div>

                <div class="card-header">
                    <a href="{{ route('admin.transaction.index') }}" 
                        class="btn btn-outline-secondary btn-sm mr-1">All</a>
                    <a href="{{ route('admin.transaction.success') }}"
                        class="btn btn-outline-secondary btn-sm mr-1">Success</a>
                    <a href="{{ route('admin.transaction.waiting') }}"
                        class="btn btn-outline-secondary btn-sm mr-1">Waiting</a>
                    <a href="{{ route('admin.transaction.failed') }}"
                        class="btn btn-outline-secondary btn-sm mr-1">Failed</a>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Payment Id</th>
                                <th>Invoice</th>
                                <th>Nominal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->payment_id }}</td>
                                <td>{{ $item->invoice }}</td>
                                <td>{{ $item-> nominal }}</td>
                                <td>
                                    @if($item->status=="success")
                                    <p class="badge badge-success">{{$item->status}}</p>
                                    @elseif($item->status=="waiting")
                                        <p class="badge badge-warning">{{$item->status}}</p>
                                    @else
                                        <p class="badge badge-danger">{{$item->status}}</p>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.transaction.destroy', $item->id) }}" method="post"
                                        onsubmit="return confirm('Sure want to delete this data?')"
                                        class="d-flex gap-1">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.transaction.show', $item->id) }}"
                                            class="btn btn-primary btn-sm mr-1">Detail</a>
                                        <button type="submit" class="btn btn-danger btn-sm mr-1">Delete</button>
                                    </form>
                                </td>
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