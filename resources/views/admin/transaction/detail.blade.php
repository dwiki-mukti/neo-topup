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
                        <li class="breadcrumb-item"><a href="{{ Route('admin.transaction.index') }}">Transaction</a></li>
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
                                    @else
                                    <p class="badge badge-danger">{{$item->status}}</p>
                                    @endif
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