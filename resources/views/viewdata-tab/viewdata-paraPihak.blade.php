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
                        @foreach ($groupedByEvaluator as $evaluatorId => $reports)
                        {{-- @dd($reports) --}}
                            <tr>
                                <td class="border-bottom-0 px-2">
                                    <h6 class="fw-semibold mb-0"></h6>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ $evaluatorId }}</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">Nama</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal"></p> 
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">-</p>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <h6 class="fw-semibold mb-0 fs-4"></h6>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="fw-semibold mb-0"></p>
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