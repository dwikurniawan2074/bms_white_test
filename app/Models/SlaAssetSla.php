<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaAssetSla extends Model
{
    use HasFactory;
    protected $table = 'sla_asset_sla';

    protected $fillable = [
        'year',
        'asset_id',
        'sla_id',
        'sort_order',
        'notes',
        'status',
    ];

    public function slaMasterSla()
    {
        return $this->hasMany(SlaMasterSla::class, 'id', 'sla_id');
    }
}
