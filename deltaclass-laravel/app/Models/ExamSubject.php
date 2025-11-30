<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'subject_name',
        'correct',
        'wrong',
        'blank',
        'net',
    ];

    protected $casts = [
        'net' => 'decimal:2',
    ];

    // Relationships
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}