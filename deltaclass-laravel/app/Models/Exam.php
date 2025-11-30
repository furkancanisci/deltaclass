<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'student_id',
        'exam_date',
        'total_correct',
        'total_wrong',
        'total_blank',
        'total_net',
        'duration_minutes',
        'notes',
    ];

    protected $casts = [
        'exam_date' => 'date',
        'total_net' => 'decimal:2',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subjects()
    {
        return $this->hasMany(ExamSubject::class);
    }
}