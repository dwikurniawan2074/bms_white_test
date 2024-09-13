@extends('index')

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4">Laporan SLA Periode</h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="rekapSla-tab" data-bs-toggle="tab" data-bs-target="#rekapSla" type="button" role="tab" aria-controls="rekapSla" aria-selected="true">Rekap SLA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="rekapRutin-tab" data-bs-toggle="tab" data-bs-target="#rekapRutin" type="button" role="tab" aria-controls="rekapRutin" aria-selected="false">Rekap Nilai (Rutin)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="rekapNonRutin-tab" data-bs-toggle="tab" data-bs-target="#rekapNonRutin" type="button" role="tab" aria-controls="rekapNonRutin" aria-selected="false">Rekap (Non Rutin)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="paraPihak-tab" data-bs-toggle="tab" data-bs-target="#paraPihak" type="button" role="tab" aria-controls="paraPihak" aria-selected="false">Para Pihak</button>
                        </li>
                      </ul>

                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active py-2" id="rekapSla" role="tabpanel" aria-labelledby="rekapSla-tab">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card w-100">
                                        <div class="card-body p-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped text-nowrap mb-0 align-middle">
                                                    <tbody>                                     
                                                        <tr>
                                                            <td class="border-bottom-0 px-2" width="30%">
                                                                <h6 class="fw-semibold mb-0">Periode</h6>
                                                            </td>
                                                            <td class="border-bottom-0 px-2">
                                                                <p class="mb-0 fw-normal">{{ $slaReports->period_id }}</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0 px-2">
                                                                <h6 class="fw-semibold mb-0">Keterangana Laporan SLA</h6>
                                                            </td>
                                                            <td class="border-bottom-0 px-2">
                                                                <p class="mb-0 fw-normal">{{ $slaReports->report_info }}</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0 px-2">
                                                                <h6 class="fw-semibold mb-0">Status</h6>
                                                            </td>
                                                            <td class="border-bottom-0 px-2">
                                                                <p class="mb-0 fw-normal">{{ $slaReports->active_status }}</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0 px-2">
                                                                <h6 class="fw-semibold mb-0">Laporan Aktif</h6>
                                                            </td>
                                                            <td class="border-bottom-0 px-2">
                                                                <p class="mb-0 fw-normal">{{ $slaReports->active_status }}</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6>Jumlah Laporan</h6>
                                            <div class="d-flex flex-row">
                                                <h6 class="">Total SLA</h6>
                                                {{-- <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-danger rounded-3">Test</span>
                                                </div> --}}
                                            </div>
                                            <h6>Nilai Akhir SLA</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card w-100">
                                    <div class="card-body p-4">
                                        <h6 class="card-title fw-semibold mb-4">Ceklist Penilaian</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered text-nowrap mb-0 align-middle">
                                                <thead class="text-dark fs-4">
                                                    <tr>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">No.</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">Asset</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">Status</h6>
                                                        </th>
                                                        <th colspan="2">
                                                            <h6 class="fw-semibold mb-0">Ketersediaan Fasilitas</h6>
                                                        </th>
                                                        <th colspan="2">
                                                            <h6 class="fw-semibold mb-0 text-center">Pelaksannaan Kegiatan</h6>
                                                        </th>
                                                        <th colspan="3">
                                                            <h6 class="fw-semibold mb-0 text-center">Kondisi</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">Nilai SLA</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">Nilai Max SLA</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">% SLA</h6>
                                                        </th>
                                                        <th rowspan="2">
                                                            <h6 class="fw-semibold mb-0">Link</h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-success rounded-3">Tersedia</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-warning rounded-3">Tidak</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-success rounded-3">Terimplementasi</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-warning rounded-3">Tidak</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-warning rounded-3">Kurang</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-primary rounded-3">Cukup Sesuai</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fw-semibold mb-0">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="badge bg-success rounded-3">Sesuai</span>
                                                                </div>
                                                            </h6>
                                                        </th>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>  
                                                    @foreach ($bmBaseAsset as $index => $asset)
                                                    <tr>
                                                        <td class="border-bottom-0 px-2">
                                                            <h6 class="fw-semibold mb-0">{{ $index+1 }}</h6>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal">{{ $asset->asset_info }}</p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <p class="mb-0 fw-normal"></p>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <h6 class="fw-semibold mb-0 fs-4"></h6>
                                                        </td>
                                                        <td class="border-bottom-0 px-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <a href="" class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">Details</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-2" id="rekapRutin" role="tabpanel" aria-labelledby="rekapRutin-tab">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h6 class="card-title fw-semibold mb-4">Rekap SLA</h6>
                                    <div class="table-responsive">
                                        <table id="sla-table" class="table table-striped text-nowrap mb-0 align-middle">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">No.</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Asset</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Evaluator</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Status</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Nilai Akhir</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>                                  
                                                <tr>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0">1</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Gedung Kantor Semarang Wahidin</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Nama 9</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="badge bg-primary rounded-3">Draft</span>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0 fs-4">100%</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <a href="" class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">Details</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-2" id="rekapNonRutin" role="tabpanel" aria-labelledby="rekapNonRutin-tab">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h6 class="card-title fw-semibold mb-4">Usulan Perbaikan</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped text-nowrap mb-0 align-middle">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">No.</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Asset</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Lokasi Rinci</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Pekerjaan</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Jenis Perbaikan</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Nilai Perbaikan</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Diusulkan Oleh</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>                                  
                                                <tr>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0">1</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Gedung Kantor Cilegon</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">AC Ruang Recepcionist</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal"></p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Kecil</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0 fs-4">100%</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="fw-semibold mb-0">Nama 1</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <a href="" class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">View</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade py-2" id="paraPihak" role="tabpanel" aria-labelledby="paraPihak-tab">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h6 class="card-title fw-semibold mb-4">Para Pihak</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped text-nowrap mb-0 align-middle">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">No.</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">NIP</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Posisi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Posisi Detail</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Tanggal</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Aktif</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>  
                                                @foreach ($slaReportFeed as $feed)
                                                <tr>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0">1</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">{{ $feed->evaluated_by }}</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Nama</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal"></p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="mb-0 fw-normal">Kecil</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <h6 class="fw-semibold mb-0 fs-4">100%</h6>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <p class="fw-semibold mb-0">Active</p>
                                                    </td>
                                                    <td class="border-bottom-0 px-2">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <a href="" class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">View</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach                      
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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