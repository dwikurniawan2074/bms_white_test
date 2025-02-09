<div class="tab-pane fade py-2" id="checklist" role="tabpanel" aria-labelledby="checklist-tab">
    <div class="card w-100">
        <div class="card-body p-4">
            <h6 class="card-title fw-semibold mb-4">Checklist</h6>
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
                                <h6 class="fw-semibold mb-0">Path</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Evaluator</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Level</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach ($slaReportChecklists as $index => $report)
                            <tr>
                                <td class="border-bottom-0 px-2">
                                    <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ $report->bmBaseAsset->asset_info }}</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ $report->evaluation_path == 1 ? 'Via HO LFM' : 'Via SOR' }}</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ isset($report->hrEmployee->name) ? 
                                        $report->hrEmployee->name : $report->evaluated_by }}</p> 
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ $report->level == 1 ? 'Korar' : ($report->level == 2 ? 'LFM Counterpart' : ($report->level == 3 ? '-' : 'Dept Head / SOR')) }}</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="" class="btn btn-danger fs-2 rounded-3 fw-semibold lh-sm">View</a>
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