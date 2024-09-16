<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReportProcessApproval extends Model
{
    use HasFactory;
    protected $table = 'sla_evaluation_report_process_approval';

    protected $fillable = [
        'id',
        'header_',
        'sort_order',
        'employee_id',
        'employee_name',
        'chair',
        'approval_level',
        'approval_status',
        'approval_date',
        'permit_info',
    ];

    public function slaEvaluationReportProcess()
    {
        return $this->hasMany(SlaEvaluationReportProcess::class, 'evaluated_by', 'employee_id');
    }
}
