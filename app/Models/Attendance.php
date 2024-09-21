<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'attendances';
    protected $primaryKey = 'id';

    protected $fillable = [
        'student_id',
        'is_attendance',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
