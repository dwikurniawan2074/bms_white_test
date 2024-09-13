<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReportFeed extends Model
{
    use HasFactory;
    protected $table = 'sla_evaluation_report_feed';

    protected $fillable = [
        'id',
        'header_',
        'period_id',
        'asset_id',
        'evaluated_by',
        'avail_val',
        'not_avail_val',
        'implemen_val',
        'suit_val',
        'sla_max_val',
        'sla_value',
        'global_notes',
        'evaluation_path',
        'level',
        'status',
        'need_info_status',
        'created_date',
        'created_by',
    ];

    public function slaReport()
    {
        return $this->belongsTo(SlaEvaluationReport::class, 'period_id', 'period_id');
    }    
}
