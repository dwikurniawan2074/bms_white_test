<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReport extends Model
{
    use HasFactory;

    protected $table = 'sla_evaluation_report';

    protected $fillable = [
        'period_id',
        'implemen_val',
        'achiev_val',
        'report_info',
        'status',
        'need_info_date',
        'need_info_status',
        'contract_num',
        'contract_date',
        'contract_num',
        'contract_date',
        'contract_num',
        'contract_date',
        'contract_num',
        'contract_date',
        'handover_num',
        'handover_date',
        'handover_cov',
        'handover_cov',
        'handover_ter',
        'handover_year',
        'handover_rou',
        'handover_rou',
        'handover_non',
        'handover_oth',
        'handover_total',
        'number_of_requirement',
        'total_sla_value',
        'final_sla_value',
        'active_status',
        'created_date',
        'created_by',
    ];

    public function processes()
    {
        return $this->hasMany(SlaEvaluationReportProcess::class, 'process_status', 'status');
    }

    public function slaReportFeed()
    {
        return $this->hasMany(SlaEvaluationReportProcess::class, 'period_id', 'period_id');
    }
}
