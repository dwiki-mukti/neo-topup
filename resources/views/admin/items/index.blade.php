@extends('layouts.admin')
@section('title', 'Item')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-capitalize">Item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right text-capitalize">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Item</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Item</h3>
                    </div>
                    
                    <div class="card-header">
                        <div id="btn-create"
                        class="btn btn-primary btn-sm mr-1">Create New Item</div>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Denom</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>
                                            <div style="line-height: 14px">{{ $item->product->name }}</div>
                                            <small style="font-size: 12px">{{ ucfirst($item->category) }}</small>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->denom }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <form action="{{ route('admin.item.destroy', $item->id) }}" method="post"
                                                onsubmit="return confirm('Sure want to delete this data?')"
                                                class="d-flex gap-1">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('admin.item.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm mr-1">Edit</a>
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm mr-1">Delete</button>
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            @foreach ($product as $products)
                                <option value="{{ $products->slug }}">{{ $products->name }}</option>
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
            $('#bar-item').addClass('active')
            $('#btn-create').click(function() {
                $('#exampleModalCenter').modal('show')
            })
            $('#close_create_item').click(function() {
                $('#exampleModalCenter').modal('hide')
            })
            $('#new_item_next').click(function() {
                location.href = "{{ route('admin.item.create') }}/" +  $('#new_item_product').val()
            })
        })
    </script>
@endsection
