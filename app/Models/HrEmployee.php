<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrEmployee extends Model
{
    use HasFactory;
    protected $table = 'hr_employee';

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'email_cc',
        'department',
        'position',
        'position_description',
        'gender',
        'place_of_birth',
        'birth_date',
        'ktp',
        'wilayah',
        'emp_speciment',
        'emp_speciment_par',
        'emp_photo',
        'evaluation_path',
        'signature',
    ];

    public function SlaEvaluationReportFeed()
    {
        return $this->hasMany(SlaEvaluationReportFeed::class, 'evaluated_by', 'employee_id');
    }
}
