<?php

namespace App\Models;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
  
    protected $fillable = ['id',
        'title',
        'link',
        'duration',
        'course_id',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
