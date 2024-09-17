<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BmBaseAsset extends Model
{
    use HasFactory;
    protected $table = 'bm_base_asset';

    protected $fillable = [
        'sort_order',
        'asset_id',
        'asset_group',
        'asset_type',
        'area_id',
        'office_id',
        'register_date',
        'asset_info',
        'evaluation_path',
        'stock',
        'created_date',
        'created_by',
    ];

    public function reportChecklists()
    {
        return $this->hasMany(SlaEvaluationReportChecklist::class, 'asset_id', 'id');
    }

    public function reportFeed()
    {
        return $this->hasMany(SlaEvaluationReportFeed::class, 'asset_id', 'id');
    }

    public function mstArea()
    {
        return $this->belongsTo(MstArea::class, 'area_id', 'code');
    }

    public function mstOffice()
    {
        return $this->belongsTo(MstOffice::class, 'office_id', 'code');
    }
}
