<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouDocumentTracking extends Model
{
    use HasFactory;
    protected $table = 'rou_document_tracking';

    protected $fillable = [
        'reference',
        'doc_number',
        'doc_type',
        'status',
        'status_date',
        'notes',
        'notes_byP',
    ];

    public function getDocTracking($slaReports_id)
    {

        $docHistory = RouDocumentTracking::where('doc_type', 'sla_report')
            ->where('doc_number', $slaReports_id)
            ->orderBy('id', 'ASC')->get();


        return $docHistory;
    }
}
