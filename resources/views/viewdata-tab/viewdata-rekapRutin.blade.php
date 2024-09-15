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
                        @foreach ($slaReportFeed as $index => $feed)                                
                        <tr>
                            <td class="border-bottom-0 px-2">
                                <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                            </td>
                            <td class="border-bottom-0 px-2">
                                <p class="mb-0 fw-normal">{{ $feed->slaAsset->asset_info }}</p>
                            </td>
                            <td class="border-bottom-0 px-2">
                                <p class="mb-0 fw-normal">{{ $feed->evaluated_by }}</p>
                            </td>
                            <td class="border-bottom-0 px-2">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3">Draft</span>
                                </div>
                            </td>
                            <td class="border-bottom-0 px-2">
                                <h6 class="fw-semibold mb-0 fs-4">100</h6>
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