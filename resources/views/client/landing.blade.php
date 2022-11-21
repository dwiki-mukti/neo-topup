@extends('layouts.client')

@section('content')
    <div class="content-wrapper">
        <section class="container section pb-3">
            <div id="bannerCarousel" class="carousel slide py-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="my-img-carousel"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                    <i class="bi bi-caret-left-fill" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                    <i class="bi bi-caret-right-fill" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="container section pb-3">
            <div class="section-header">
                <div class="section-title">
                    <span class="lamp"></span>
                    <div class="section-title-text">trending</div>
                </div>
            </div>
            <div class="section-content">
                {{-- <div id="trendingCarousel" class="carousel slide py-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#trendingCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @foreach ([0, 1, 2, 3, 4, 5] as $item)
                                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                        @include('client.components.game-box')
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#trendingCarousel" role="button" data-slide="prev">
                        <i class="bi bi-caret-left-fill" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#trendingCarousel" role="button" data-slide="next">
                        <i class="bi bi-caret-right-fill" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
                <div class="row">
                    @foreach ([0, 1, 2, 3, 4, 5] as $item)
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                            @include('client.components.game-box')
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="container section">
            <div class="section-header">
                <div class="section-title">
                    <span class="lamp"></span>
                    <div class="section-title-text">layanan service</div>
                </div>
                {{-- <div class="section-option">
                    <div>Semua Game</div>
                    <div class="active">Game Mobile</div>
                    <div>Game PC</div>
                </div> --}}
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ([0, 1, 2, 3, 4] as $item)
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                            @include('client.components.game-box')
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="section-footer justify-content-center">
                <a href="" class="text-glow-primary" style="border-radius: 20px;"><u>Tampilkan Semua</u></a>
            </div> --}}
        </section>
        <section class="container section">
            <div class="section-header">
                <div class="section-title">
                    <span class="lamp"></span>
                    <div class="section-title-text">voucher</div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ([0, 1, 2, 3, 4, 5, 6, 7] as $item)
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                            @include('client.components.game-box')
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
@section('style')
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            padding: 0 20px !important;
            width: auto !important
        }

        #trendingCarousel .carousel-inner {
            padding: 5px 3.5rem;
        }

        #trendingCarousel .carousel-control-prev,
        #trendingCarousel .carousel-control-next {
            color: inherit;
        }

        #trendingCarousel .carousel-indicators li {
            background-color: var(--my-primary) !important;
        }

        .my-img-carousel {
            height: 12rem;
            width: 100%;
            background-color: gray;
            border-radius: var(--my-rounded-1)
        }

        @media (min-width: 576px) {}

        @media (min-width: 768px) {
            .my-img-carousel {
                height: 15rem;
            }
        }

        @media (min-width: 992px) {
            .my-img-carousel {
                height: 18rem;
            }
        }

        @media (min-width: 1200px) {
            .my-img-carousel {
                height: 20rem;
            }
        }

    </style>
@endsection
