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
                    <h6>Jumlah Laporan: <span class="badge bg-danger rounded-3">{{ $slaReports->number_of_report }}</span></h6>
                    <div class="d-flex flex-row">
                        <h6 class="">Total SLA: <span class="badge bg-danger rounded-3">{{ $slaReports->total_sla_value }}</span></h6>
                        {{-- <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3">Test</span>
                        </div> --}}
                    </div>
                    <h6>Nilai Akhir SLA: <span class="badge bg-danger rounded-3">{{ $slaReports->final_sla_value }} %</span></h6>
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
                                <th rowspan="2" class="centered">
                                    <h6 class="fw-semibold mb-0">No.</h6>
                                </th>
                                <th rowspan="2" class="centered">
                                    <h6 class="fw-semibold mb-0">Asset</h6>
                                </th>
                                <th rowspan="2" class="centered">
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
                            @php
                                use App\Models\SlaEvaluationReportFeed;
                                use Illuminate\Support\Facades\DB;
                            @endphp
                            @foreach ($allAsset as $index => $asset)
                            @php
                                // Retrieve the top feed ID and feed model
                                $feedModel = new SlaEvaluationReportFeed();
                                $feed_id = $feedModel->getTopFeedId($asset->asset_id);
                                $feed_model = $feed_id ? $feedModel->find($feed_id) : null;
                            @endphp
                            <tr>
                                <td class="border-bottom-0 px-2">
                                    <h6 class="fw-semibold mb-0">{{ $index+1 }}</h6>
                                </td>
                                <td class="border-bottom-0 px-2">
                                    <p class="mb-0 fw-normal">{{ $asset->bmBaseAsset->asset_info }}</p>
                                </td>
                                <td class="border-bottom-0 px-2 text-center">
                                    <span class="badge bg-success rounded-3">
                                        {{ $feedModel->getTopFeedStatus($slaReports->id, $slaReports->period_id, $asset->asset_id) }}
                                    </span>
                                </td>
                        
                                @if ($feed_id > 0 && $feed_model)
                                    @php
                                        // Perform the necessary raw SQL queries to get the values
                                        $total_suit_1 = DB::table('sla_evaluation_report_feed_detail')
                                            ->where('header_', $feed_model->id)
                                            ->where('suit_val', 1)
                                            ->count();
                        
                                        $total_suit_2 = DB::table('sla_evaluation_report_feed_detail')
                                            ->where('header_', $feed_model->id)
                                            ->where('suit_val', 2)
                                            ->count();
                        
                                        $total_suit_3 = DB::table('sla_evaluation_report_feed_detail')
                                            ->where('header_', $feed_model->id)
                                            ->where('suit_val', 3)
                                            ->count();
                        
                                        $total_suit = DB::table('sla_evaluation_report_feed_detail')
                                            ->where('header_', $feed_model->id)
                                            ->where('avail_val', 1)
                                            ->sum('suit_val');
                                    @endphp
                        
                                    <!-- Outputting the results as table cells -->
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $feed_model->avail_val }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $feed_model->not_avail_val }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $feed_model->implemen_val }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">
                                        {{ ($feed_model->avail_val + $feed_model->not_avail_val) - $feed_model->implemen_val }}
                                    </td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $total_suit_1 }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $total_suit_2 }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $total_suit_3 }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $total_suit }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $feed_model->sla_max_val }}</td>
                                    <td class="border-bottom-0 px-2 text-center fw-bold">{{ $feed_model->sla_value }}</td>
                        
                                @else
                                    <!-- Empty row if no feed_model found -->
                                    <td colspan="9"></td>
                                @endif
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