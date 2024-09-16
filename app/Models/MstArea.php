<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstArea extends Model
{
    use HasFactory;
    protected $table = 'mst_area';

    protected $fillable = [
        'id',
        'code',
        'number',
        'area',
        'address',
        'status',
    ];

    public function bmBaseAsset()
    {
        return $this->hasMany(BmBaseAsset::class, 'area_id', 'id');
    }
}
