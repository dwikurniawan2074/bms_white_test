@extends('index')

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="card-title fw-semibold mb-4">Main Menu</h5>
                        <div class="card">
                            <div class="card-header">
                                Laporan Service Level Agreement
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('report_ilustration.jpg') }}" style="max-height: 300px;" class="card-img-top" alt="...">
                                <p class="card-text">Menu Laporan SLA menampilkan data SLA Secara Lengkap</p>
                                <a href="{{ url('viewdata-sla') }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Copyright 2024 &copy; <a href="https://pgnmas.co.id/index.php/menu/aboutus" target="_blank"
                class="pe-1 text-primary text-decoration-underline">PT Permata Graha Nusantara</a></p>
    </div>
</div>
@endsection