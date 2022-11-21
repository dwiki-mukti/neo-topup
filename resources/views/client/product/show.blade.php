@extends('layouts.client')

@section('content')
    <div class="content-wrapper">
        <section class="container section pb-3">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="aspect-ratio: 5/3; background-color: gray;"></div>
                            <div class="card-body">
                                <h4 class="text-title">Free Fire</h4>
                                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius tempora totam atque
                                    molestias odit voluptate tenetur? Ipsam deleniti iste odit. Nisi, et mollitia numquam
                                    odio ducimus fuga! Provident, rem inventore.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div>Informasi Akun Player</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID Player</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Xxx...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div>Pilih Item</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="item" type="radio" class="d-none" id="item1">
                                            <label for="item1">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>Item 1</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="item" type="radio" class="d-none" id="item2">
                                            <label for="item2">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>Item 1</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="item" type="radio" class="d-none" id="item3">
                                            <label for="item3">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>Item 1</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div>Pilih Pembayaran</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="payment" type="radio" class="d-none" id="payment1">
                                            <label for="payment1">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>payment 1</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="payment" type="radio" class="d-none" id="payment2">
                                            <label for="payment2">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>payment 2</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="radio-card">
                                            <input name="payment" type="radio" class="d-none" id="payment3">
                                            <label for="payment3">
                                                <div class="radio-check">
                                                    <div class="bg-radio-check"></div>
                                                    <i class="bi bi-check"></i>
                                                </div>
                                                <span>payment 3</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div>Beli Sekarang</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email <small>(Optional)</small></label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                            <small>Jika anda ingin mendapatkan bukti pembayaran atas pembelian
                                                anda,
                                                harap mengisi alamat emailnya</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn my-btn-primary">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('style')
    <style>
        .radio-card label {
            padding: 0.7rem 1.2rem;
            border-radius: 0.3rem;
            border: 1px solid var(--primary);
            cursor: pointer;
            transition: var(--my-delay-2);
            width: 100%;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            text-align: center;
        }

        .radio-card label:hover {
            margin-top: -3px;
            box-shadow: 0 1px 3px var(--primary);
        }

        .radio-card .radio-check {
            opacity: 0;
        }

        .radio-card input:checked+label .radio-check {
            opacity: 1;
        }


        .radio-card .radio-check .bg-radio-check {
            background: var(--my-primary);
            transform: rotate(45deg);
            height: 50px;
            width: 25px;
            margin-top: -18px;
            margin-left: -5px;
        }

        .radio-card .radio-check,
        .radio-card .radio-check .bi-check {
            position: absolute;
            top: 0;
            left: 0;
        }

    </style>
@endsection
