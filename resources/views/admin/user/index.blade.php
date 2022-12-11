@extends('layouts.admin')
@section('title', 'User')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-capitalize">User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right text-capitalize">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User</h3>
                </div>
                <div class="card-header">
                    <div id="btn-detail" class="btn btn-primary btn-sm mr-1">Create New User</div>
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
                <div class="card-body table-responsive p-3">
                    <table id="dataTable" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Saldo Coin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                            @if($users->role == "client")
                            <tr>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->role }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->saldo_coin }}</td>
                                <td>
                                    <form action="{{ route('admin.item.destroy', $users->id) }}" method="post"
                                        onsubmit="return confirm('Sure want to delete this data?')"
                                        class="d-flex gap-1">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1">Delete</button>
                                    </form>
                                    <a id="btn-detail" href="{{ route('admin.user.show', $users->id) }}"
                                        class="btn btn-primary btn-sm mr-1">Detail</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Create New Item
                </h5>
            </div>
            <div class="modal-body" style="min-width: 350px">
                <div class="form-group">
                    <label for="new_item_game">Select Product</label>
                    <select name="new_item_product" id="new_item_product" class="form-control">
                        @foreach ($user as $users)
                        <option value="{{ $users->slug }}">{{ $users->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn btn-secondary" id="close_create_item">
                    <span class="d-none d-sm-block">Close</span>
                </div>
                <div class="btn btn-primary ml-1" id="new_item_next">
                    <span class="d-none d-sm-block">Next</span>
                </div>
            </div>
        </div>
    </div>
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