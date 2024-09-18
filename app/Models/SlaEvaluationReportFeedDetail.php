<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaEvaluationReportFeedDetail extends Model
{
    use HasFactory;

    protected $table = 'sla_evaluation_report_feed_detail';

    protected $fillable = [
        'id',
        'header_',
        'sort_order',
        'sla_id',
        'sla_desc',
        'avail_val',
        'implemen_val',
        'suit_val',
        'suit_val_rec',
        'notes',
        'is_check',
    ];
}
