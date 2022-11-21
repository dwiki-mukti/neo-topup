@extends('layouts.client')

@section('content')
    <div class="content-wrapper">
        <section class="container section">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-widget widget-user-2 mb-1">
                            <div class="widget-user-header bg-my-primary text-white">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="bg-my-image my-profile-full btn-profile" data-toggle="modal" data-target="#modal-edit-profile"
                                            style="background-image: url('/adminlte/images/default_profile/1.jpg')">
                                            <div>
                                                <i class="bi bi-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3 style="font-size: 25px; font-weight: 300;">Nadia Carmichael</h3>
                                        <h5 style="font-weight: 500; line-height: 1.2;">User@email.com</h5>
                                    </div>
                                    <div class="col-1">
                                        <div style="cursor: pointer" data-toggle="modal" data-target="#modal-edit-name">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            Total Pembelian <span class="float-right badge bg-primary">31</span>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            Bergabung Sejak <span class="float-right badge bg-danger">12 April 2004</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="" style="text-decoration: underline;">
                                <i class="bi bi-key"></i>
                                <span>Ubah Password</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">riwayat pembelian</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Item</td>
                                            <td>Payment</td>
                                            <td>Nominal</td>
                                            <td>Tanggal</td>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>lore</td>
                                        <td>aaa</td>
                                        <td>hello</td>
                                        <td>aaa</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-edit-name">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Nama Panggilan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" class="form-control" id="nama" placeholder="Masukkan ">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-edit-profile">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Edit Photo Profile
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="#"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="photo_profile">Photo Profile</label>
                            <input type="file" name="photo_profile" class="form-control" id="photo_profile">
                            @error('photo_profile')
                                <div class="text-danger mt-1" style="font-size: .875rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">
                            Change
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .btn-profile {
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            flex-direction: column-reverse;
            cursor: pointer;
            text-align: center;
        }

        .btn-profile>div {
            background-color: rgba(32, 33, 36, 0.6);
            color: #ddd;
        }

    </style>
@endsection
