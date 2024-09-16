<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouDocumentTracking extends Model
{
    use HasFactory;
    protected $table = 'rou_document_tracking';

    protected $fillable = [
        'reference',
        'doc_number',
        'doc_type',
        'status',
        'status_date',
        'notes',
        'notes_byP',
    ];
}
