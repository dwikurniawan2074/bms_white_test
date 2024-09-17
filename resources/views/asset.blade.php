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
<div class="container-fluid" style="max-width: fit-content;">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4">Master Asset</h5>
                    <div class="card w-100">
                        <div class="card-body p-4">
                            {{-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> --}}
                            <div class="table-responsive">
                                <table id="asset-table" class="table table-striped text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th>
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">ID</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Keterangan Asset</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Group Asset</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Jenis Asset</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Area</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Office</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Path Approval</h6>
                                            </th>
                                            <th>
                                                <h6 class="fw-semibold mb-0 text-center">Actions</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bmBaseAssetArea as $index => $asset)
                                        <tr>
                                            <td class="border-bottom-0 px-2">
                                                <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $asset->id }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $asset->asset_info }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $asset->asset_group }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $asset->asset_type }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                {{-- @dd($asset->area_id) --}}
                                                 <p class="mb-0 fw-normal">{{ $asset->mstArea->code ?? '' }} {{ optional($asset->mstArea)->area ?? '-' }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <p class="mb-0 fw-normal">{{ $asset->office_id }} {{ optional($asset->mstOffice)->office ?? $asset->office_id }}</p>
                                            </td>                                            
                                            <td class="border-bottom-0 px-2">
                                                 <p class="mb-0 fw-normal text-center">{{ $asset->evaluation_path == 1 ? 'Via HO LFM' : 'Via SOR' }}</p>
                                            </td>
                                            <td class="border-bottom-0 px-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="" 
                                                        class="btn btn-primary fs-2 rounded-3 fw-semibold lh-sm">
                                                        <i class="ti ti-eye"></i>
                                                    </a>
                                                    <a href="" 
                                                        class="btn btn-warning fs-2 rounded-3 fw-semibold lh-sm">
                                                        <i class="ti ti-pencil"></i>
                                                    </a>
                                                    <a href="" 
                                                        class="btn btn-danger fs-2 rounded-3 fw-semibold lh-sm">
                                                        <i class="ti ti-trash"></i>
                                                    </a>
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
    $('#asset-table').DataTable();
</script>
@endsection