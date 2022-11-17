<?php

namespace App\Models;
use App\Instructor;
use App\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_instructor extends Model
{
    use HasFactory;
    protected $table = 'course_instructors';
    protected $fillable = [
        'id',
        'instructor_id',
        'course_id',
    ];
}
