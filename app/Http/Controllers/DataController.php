<?php

namespace App\Http\Controllers;
use App\Models\SlaEvaluationReport;
use App\Models\SlaEvaluationReportChecklist;
use App\Models\BmBaseAsset;
use App\Models\SlaAssetSla;
use App\Models\SlaMasterSla;
use App\Models\SlaEvaluationReportFeed;
use App\Models\RouDocumentTracking;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $slaReports = SlaEvaluationReport::all();

        return view('viewdata-sla', compact('slaReports'));
    }

    public function asset()
    {
        $bmBaseAsset = BmBaseAsset::all();
        $bmBaseAssetArea = BmBaseAsset::with('mstOffice')->get();
        // dd($bmBaseAssetArea);

        return view('asset', compact('bmBaseAssetArea'));
    }

    public function details($period_id)
    {
        $slaReports = SlaEvaluationReport::where('period_id', $period_id)->first();
        $slaReportChecklists = SlaEvaluationReportChecklist::where('period_id', $period_id)->get();
        $bmBaseAsset = BmBaseAsset::all();
        $slaReportFeed = SlaEvaluationReportFeed::where('period_id', $period_id)
            ->whereHas('hrEmployee')
            ->with(['slaAsset', 'hrEmployee'])->get();
        
        $groupedByEvaluator = $slaReportFeed->groupBy(function ($item) {
            return $item->evaluated_by;
        });

        $allAsset = SlaEvaluationReportChecklist::select('asset_id')
            ->distinct()
            // ->where('header_', $model->id)
            ->where('period_id', $period_id)
            ->with('bmBaseAsset')
            ->get();
        
        $rouDocumentModel = new RouDocumentTracking();
        $docHistory = $rouDocumentModel->getDocTracking($slaReports->id);

        $feedModel = new SlaEvaluationReportFeed();
        $allFeed = $feedModel->getAllFeedByLevel($slaReports->id, $period_id, 1);
        // dd($allFeed);

        // $feedReport = new SlaEvaluationReportFeed();
        // $feed_id = $feedReport->getTopFeedId($slaReports->id)
        
        // dd($docHistory);
        
        return view('viewdata-slaDetails', compact('slaReports', 'bmBaseAsset', 'slaReportFeed', 
            'groupedByEvaluator', 'slaReportChecklists', 'allAsset', 'allFeed', 'docHistory'));
    }
}
