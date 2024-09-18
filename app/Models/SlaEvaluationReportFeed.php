<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class SlaEvaluationReportFeed extends Model
{
    use HasFactory;
    protected $table = 'sla_evaluation_report_feed';

    protected $fillable = [
        'id',
        'header_',
        'period_id',
        'asset_id',
        'evaluated_by',
        'avail_val',
        'not_avail_val',
        'implemen_val',
        'suit_val',
        'sla_max_val',
        'sla_value',
        'global_notes',
        'evaluation_path',
        'level',
        'status',
        'need_info_status',
        'created_date',
        'created_by',
    ];

    public function slaReport()
    {
        return $this->belongsTo(SlaEvaluationReport::class, 'period_id', 'period_id');
    } 
    
    public function slaAsset()
    {
        return $this->belongsTo(BmBaseAsset::class, 'asset_id', 'id');
    }

    public function hrEmployee()
    {
        return $this->belongsTo(HrEmployee::class, 'evaluated_by', 'employee_id');
    }

    public function getTopFeedStatus($header_, $periodId, $assetId)
    {
        $level = $this->where('period_id', $periodId)
            ->where('asset_id', $assetId)
            ->max('level');

        $assetPath = BmBaseAsset::find($assetId);

        if ($level == 4 && $assetPath->evaluation_path == 1) {
            return '<span class="badge badge-success">Division Head LFM</span>';
        } elseif ($level == 4 && $assetPath->evaluation_path == 2) {
            return '<span class="badge badge-success">SOR</span>';
        } elseif ($level == 2) {
            return '<span class="badge badge-success">LFM Counterpart</span>';
        } elseif ($level == 1) {
            return '<span class="badge badge-success">Korar</span>';
        } else {
            return '<span class="badge badge">Kosong</span>';
        }
    }

    public function getTopFeedId($asset_id)
    {
        $level = $this->where('asset_id', $asset_id)
                    ->max('level');
        
        if ($level > 0) {
            $feed_model = $this->where('asset_id', $asset_id)
                            ->where('level', $level)
                            ->first();
            
            if (!empty($feed_model)) {
                return $feed_model->id;
            }
        }

        return 0;
    }

    public function getAllFeedByLevel($header_, $period_id, $level = 4)
    {
        $query = $this->where('period_id', $period_id)
                      ->orderBy('evaluated_by', 'ASC')
                      ->orderBy('id', 'ASC');
        
        if ($level == 2) {
            $query->whereIn('level', [2, 4]);
        } else {
            $query->where('level', $level);
        }

        $data = $query->get();

        return $data;
    }

    public function getLabel($id)
    {
        // Initialize the label
        $label = '';

        // Find the model by primary key
        $model = $this->find($id);

        if (!$model) {
            return ''; // Handle case when model not found
        }

        // Check and set the evaluation path
        if ($model->evaluation_path == 0 || $model->evaluation_path === null) {
            // Call the method to get the path (assumed to be from another model)
            $model->evaluation_path = EvaluationReportChecklist::getPath(
                $model->header_,
                $model->asset_id,
                $model->level,
                $model->evaluated_by
            );

            // Save the updated model
            $model->save();
        }

        // Determine the icon based on need_info_status
        if ($model->need_info_status == 1) {
            $label = '<i class="icon-question-sign"></i>';
        } else {
            $label = '<i class="icon-check"></i>';
        }

        // Get the status label from the ModelsStatus model
        $rouModelsStatus = new RouModelsStatus();
        $status_label = $rouModelsStatus->getStatus('sla_report_feed', $model->status);

        // Return the appropriate HTML based on the status
        if ($model->status == 0) {
            return $status_label;
        } elseif ($model->status == 5) {
            return $status_label ;
        } else {
            return $status_label;
        }
    }
}
