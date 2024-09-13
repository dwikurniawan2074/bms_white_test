@extends('index')

@section('header-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<style>
    table.dataTable tbody td {
        padding: 15px 10px;
    }

    table.dataTable thead th {
        padding: 15px 10px;
        margin-bottom: 10px;
    }
</style>
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4">Laporan Service Level Agreement</h5>
                    <div class="card w-100">
                        <div class="card-body p-4">
                            {{-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> --}}
                            <div class="table-responsive">
                                <table id="sla-table" class="table table-striped text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th>
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Periode</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Keterangan Laporan SLA</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Status</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Laporan Aktif</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Actions</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slaReports as $index => $report)                                        
                                        <tr>
                                            <td class="border-bottom-0 px-2">
                                                <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $report->period_id }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $report->report_info }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge {{ $report->active_status == 'Selesai'? 'bg-success' : 'bg-warning' }} 
                                                        rounded-3 fw-semibold">{{ $report->active_status }}</span>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <h6 class="fw-semibold mb-0 fs-4">{{ $report->active_status }}</h6>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ url('/viewdata-slaDetails', ['period_id' => $report->period_id]) }}" 
                                                        class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">Details</a>
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
    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Copyright 2024 &copy; <a href="https://pgnmas.co.id/index.php/menu/aboutus" target="_blank"
                class="pe-1 text-primary text-decoration-underline">PT Permata Graha Nusantara</a></p>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#sla-table').DataTable();
</script>
@endsection