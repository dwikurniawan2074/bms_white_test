<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReportProcess extends Model
{
    use HasFactory;
    protected $table = 'sla_evaluation_report_process';

    protected $fillable = [
        'id',
        'header_',
        'process_status',
        'process_name',
        'start_date',
        'start_time',
        'finish_date',
        'finish_time',
        'pic_process',
        'status',
        'created_date',
        'created_by',
    ];

    public function report()
    {
        return $this->belongsTo(SlaEvaluationReport::class, 'process_status', 'status');
    }
}
