<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReportChecklist extends Model
{
    use HasFactory;
    protected $table = 'sla_evaluation_report_checklist';

    protected $fillable = [
        'header_',
        'period_id',
        'asset_id',
        'evaluation_path',
        'evaluated_by',
        'level',
        'status',
    ];
}
