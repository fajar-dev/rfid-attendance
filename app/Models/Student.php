<?php

namespace App\Models;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'student_identity_number',
    ];

    public function attadance()
    {
        return $this->hasMany(Attendance::class);
    }
}
