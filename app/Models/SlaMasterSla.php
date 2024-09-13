<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaMasterSla extends Model
{
    use HasFactory;
    protected $table = 'sla_master_sla';

    protected $fillable = [
        'id',
        'year',
        'parent_id',
        'sort_order',
        'sort_order_word',
        'sla_desc',
        'tool_tips',
        'asset_type',
        'sla_type',
        'level',
        'status',
        'created_date',
        'created_by',
    ];

    public function slaAsset()
    {
        return $this->belongsTo(SlaAssetSla::class, 'sla_id', 'id');
    }
}
