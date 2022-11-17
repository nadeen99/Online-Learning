<?php

namespace App\Models;
use App\Student;
use App\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_student extends Model
{
    use HasFactory;
    protected $table = 'course_student';
    protected $fillable = [
        'id',
        'student_id',
        'course_id',
    ];
}
