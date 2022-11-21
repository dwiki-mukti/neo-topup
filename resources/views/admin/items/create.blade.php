@extends('layouts.admin')
@section('title', 'Create Item')

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
                            <li class="breadcrumb-item"><a href="{{ Route('admin.item.index') }}">Item</a></li>
                            <li class="breadcrumb-item active">Create Item</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <form action="{{ Route('admin.item.store') }}" method="post" enctype="multipart/form-data">
                    @CSRF
                    @method('POST')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create New Item</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Product</label>
                                <input disabled class="form-control" value="{{ $product->name }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                @error('product_id')
                                    <div class="text-danger mt-1" style="font-size: .875rem;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input disabled class="form-control" value="{{ $product->category }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Item</label>
                                <input type="text" value="{{ old('name') }}" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
                                @error('name')
                                    <div class="text-danger mt-1" style="font-size: .875rem;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="code">Code Item</label>
                                <input type="text" value="{{ old('code') }}" name="code"
                                    class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Code">
                                @error('code')
                                    <div class="text-danger mt-1" style="font-size: .875rem;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="denom">Denom</label>
                                <input type="text" value="{{ old('denom') }}" name="denom"
                                    class="form-control @error('denom') is-invalid @enderror" id="denom" placeholder="Denom">
                                @error('denom')
                                    <div class="text-danger mt-1" style="font-size: .875rem;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" value="{{ old('price') }}" name="price"
                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                    placeholder="Harga">
                                @error('price')
                                    <div class="text-danger mt-1" style="font-size: .875rem;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="{{ Route('admin.item.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#bar-item').addClass('active')
        })
    </script>
@endsection
