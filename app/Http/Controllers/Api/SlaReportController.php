<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlaEvaluationReport;

class SlaReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SlaEvaluationReport::all();

        if($data){
            return response()->json([
                'status' => true,
                'message' => 'Data is founded',
                'data' => $data
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data not found'
            ]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SlaEvaluationReport::find($id);
        dd($data);

        if($data){
            return response()->json([
                'status' => true,
                'message' => 'Data is founded',
                'data' => $data
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data not found'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
