@extends('index')

@section('main-content')
<div class="container-fluid" style="max-width: fit-content;">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4">{{ $slaReports->report_info }}</h5>
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
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="beritaAcara-tab" data-bs-toggle="tab" data-bs-target="#beritaAcara" type="button" role="tab" aria-controls="beritaAcara" aria-selected="false">Berita Acara</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline" type="button" role="tab" aria-controls="timeline" aria-selected="false">Timeline</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="checklist-tab" data-bs-toggle="tab" data-bs-target="#checklist" type="button" role="tab" aria-controls="checklist" aria-selected="false">Checklist</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="lampiran-tab" data-bs-toggle="tab" data-bs-target="#lampiran" type="button" role="tab" aria-controls="lampiran" aria-selected="false">Lampiran</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">History</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        @include('viewdata-tab.viewdata-rekapSla')
                        @include('viewdata-tab.viewdata-rekapRutin')
                        @include('viewdata-tab.viewdata-rekapNonRutin')
                        @include('viewdata-tab.viewdata-paraPihak')
                        @include('viewdata-tab.viewdata-checklist')
                        @include('viewdata-tab.viewdata-history')
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