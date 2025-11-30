<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'guidance_id',
        'appointment_date',
        'subject',
        'notes',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'datetime',
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
}