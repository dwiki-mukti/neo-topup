@extends('layouts.admin')
@section('title', 'Product')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-capitalize">product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right text-capitalize">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>
                    </div>
                    
                    <div class="card-header">
                        <a href="{{ route('admin.product.create') }}"
                        class="btn btn-primary btn-sm mr-1">Create New Product</a>
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
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $data)
                                    <tr>
                                        <td>
                                            @if ($data->thumbnail)
                                                <img src="{{ asset('storage/' . $data->thumbnail) }}"
                                                    class="rounded" style="max-width: 100px" alt="...">
                                            @else
                                                <div>
                                                    <img src="{{ asset('assets/images/product/codm.png') }}"
                                                        class="rounded" style="max-width: 100px" alt="...">
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->slug }}</td>
                                        <td>{{ $data->category }}</td>
                                        <td>
                                            <form action="{{ route('admin.product.destroy', $data->id) }}" method="post"
                                                onsubmit="return confirm('Sure want to delete this data?')"
                                                class="d-flex gap-1">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('admin.product.edit', $data->id) }}"
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#bar-product').addClass('active')
        })
    </script>
@endsection
