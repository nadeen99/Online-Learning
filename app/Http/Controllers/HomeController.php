<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Video;
use App\Models\Instructor;
use Auth;
use App\Http\Controllers\CourseController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
  
    // public function getcourses()
    // {
    //      $student =Student::find(1);
    //      return $student -> courses;

      
    // }
    public function showcourses(){
        $student  = Auth::user();
        $student -> courses;
        return view('home', compact('student'));
         
    }

    public function allCourses(){
          $course  = Course::with('instructors')->get();
        return   view('all', compact('course'));
         
    }
    public function courseNum(){

        $student =Auth::user();
        $num=DB::table("course_student")->where('student_id',$student->id)->count();
        return view('coursesdtats', compact('num'));
    }
    


    public function myins($id){
        $courses  = Course::find($id);
        $videos  = Video::find($id)->get(); // return all videos with a specific course
      return   view('myins', compact('courses', 'videos'));
       
  }

  public function instructorCourses($id){
    $instructors  = Instructor::find($id);
    return   view('instructorCourses', compact('instructors'));
}



}


