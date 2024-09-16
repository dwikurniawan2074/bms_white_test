<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstOffice extends Model
{
    use HasFactory;
    protected $table = 'mst_office';

    protected $fillable = [
        'code',
        'office',
        'area_id',
        'address',
        'status',
    ];

    public function bmBaseAsset()
    {
        return $this->hasMany(BmBaseAsset::class, 'office_id', 'code');
    }
}
