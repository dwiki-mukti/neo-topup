@extends('layouts.admin')
@section('title', 'Edit Product')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-capitalize">Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right text-capitalize">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('admin.product.index') }}">Product</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid"> 
            <form action="{{ Route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @CSRF
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" value="{{ old('name', $product->name) }}">
                            @error('name')
                            <div class="text-danger mt-1" style="font-size: .875rem;">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category"
                                class="form-control @error('category') is-invalid @enderror">
                                <option id="val_service" value="service">Service</option>
                                <option id="val_voucher" value="voucher">Voucher</option>
                            </select>
                            @error('category')
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" 
                                    class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-header">
                        <h4 class="card-title">Filed Order</h4>
                        <div class="btn btn-success float-right" id="addCol"><i class="fa fa-plus"></i> Add New Column</div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Field Name</th>
                                    <th>Type data</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="container-col">
                                @foreach ((json_decode($product->fields) ?? []) as $fields)
                                    <tr>
                                        <td>
                                            <input name="name_fields[]" type="text" class="form-control"
                                                value="{{ $fields->label }}" required>
                                        </td>
                                        <td>
                                            <select name="type_data_fields[]" class="form-control">
                                                <option {{ $fields->type_data == 'string' ? 'selected' : null }}
                                                    value="string">string</option>
                                                <option {{ $fields->type_data == 'integer' ? 'selected' : null }}
                                                    value="integer">integer</option>
                                                <option {{ $fields->type_data == 'boolean' ? 'selected' : null }}
                                                    value="boolean">boolean</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="btn btn-outline-danger btn-sm btn-remove-col">Delete</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <a href="{{ Route('admin.product.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $("#val_{{ old('category') }}").prop('selected', 'selected')
        function append_col() {
            $('#container-col').append(`
              <tr>
                  <td>
                      <input name="name_fields[]" type="text" class="form-control" required>
                  </td>
                  <td>
                      <select name="type_data_fields[]" class="form-control">
                          <option value="string">string</option>
                          <option value="integer">integer</option>
                          <option value="boolean">boolean</option>
                      </select>
                  </td>
                  <td>
                      <div class="btn btn-outline-danger btn-sm btn-remove-col">Delete</div>
                  </td>
              </tr>
          `)
        } 
        $('#addCol').click(() => append_col())
        $(document).on('click', '.btn-remove-col', function() {
            $(this).parents('tr').remove()
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#bar-product').addClass('active')
        })
    </script>
@endsection
