@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="card-body card card-primary card-outline">
            <h1>Hello!</h1>
            <p>Welcome to Neo TopUp</p>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#bar-dashboard').addClass('active')
})
</script>
@endsection