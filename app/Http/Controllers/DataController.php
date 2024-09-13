<?php

namespace App\Http\Controllers;
use App\Models\SlaEvaluationReport;
use App\Models\SlaEvaluationReportChecklist;
use App\Models\BmBaseAsset;
use App\Models\SlaAssetSla;
use App\Models\SlaMasterSla;
use App\Models\SlaEvaluationReportFeed;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $slaReports = SlaEvaluationReport::all();

        return view('viewdata-sla', compact('slaReports'));
    }

    public function details($period_id)
    {
        $slaReports = SlaEvaluationReport::where('period_id', $period_id)->first();
        $bmBaseAsset = BmBaseAsset::all();
        $slaReportFeed = SlaEvaluationReportFeed::where('period_id', $period_id)
            ->whereHas('hrEmployee')
            ->with(['slaAsset', 'hrEmployee'])->get();

        $groupedByEvaluator = $slaReportFeed->groupBy(function ($item) {
            return $item->evaluated_by;
        });
        
        return view('viewdata-slaDetails', compact('slaReports', 'bmBaseAsset', 'slaReportFeed' , 'groupedByEvaluator'));
    }
}
