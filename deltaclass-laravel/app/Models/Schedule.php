<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'student_id',
        'guidance_id',
        'start_date',
        'end_date',
        'description',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function guidance()
    {
        return $this->belongsTo(Guidance::class);
    }

    public function scheduleItems()
    {
        return $this->hasMany(ScheduleItem::class);
    }
}