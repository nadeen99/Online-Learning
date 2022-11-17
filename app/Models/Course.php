<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
  
    protected $fillable = ['id',
        'name',
        'duration',
        'description',
        'price',
    ];
      // protected $timestamps = flase;
    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'course_instructors', 'course_id', 'instructor_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'course_id', 'id');
    }
}
