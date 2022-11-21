@extends('layouts.admin')
@section('title', '__basicTable')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-capitalize">__basicTable</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right text-capitalize">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">__basicTable</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div>hello</div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $('#bar-__basicTable').addClass('active')
        $('#bar-__basicTable').parents('.nav-item').addClass('menu-open')
        $('#bar-__basicTable').parents('ul').first().siblings('.nav-link').addClass('active')
    </script>
@endsection
