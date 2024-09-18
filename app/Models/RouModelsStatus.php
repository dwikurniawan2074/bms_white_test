<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouModelsStatus extends Model
{
    use HasFactory;
    protected $table = 'rou_document_tracking';

    protected $fillable = [
        'header_',
        'number',
        'status_name',
        'status_name2',
        'approval_type',
        'approval_by',
        'approval_position',
        'notes',
        'status_info',
        'approval_list',
        'is_active',
    ];

    public function getStatus($type, $number)
    {
        // Fetch the status using a query builder with joins
        $status = \DB::table('rou_models as m')
            ->join('rou_models_status as s', 'm.id', '=', 's.header_')
            ->where('m.route_name', $type)
            ->where('s.number', $number)
            ->select('s.status_name')
            ->first();

        // Check if status is found, if not return '-'
        if (empty($status)) {
            return '-';
        } else {
            return $status->status_name;
        }
    }
}
