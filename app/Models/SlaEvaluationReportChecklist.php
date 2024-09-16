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

    public function bmBaseAsset()
    {
        return $this->belongsTo(BmBaseAsset::class, 'asset_id', 'id');
    }

    public function hrEmployee()
    {
        return $this->belongsTo(HrEmployee::class, 'evaluated_by', 'employee_id');
    }

    public function slaEvaluationReportProcessApproval()
    {
        return $this->belongsTo(SlaEvaluationReportProcessApproval::class, 'evaluated_by', 'employee_id');
    }
}
