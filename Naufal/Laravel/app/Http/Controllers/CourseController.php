<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\sessionCourse;
use App\Models\enrolledCourse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function courses()
    {
        $id = Auth::id();
        return view('course', [
            "title" => "Courses",
            "course" => Course::all(),
            "enroll" => enrolledCourse::find($id),
            "session" => sessionCourse::find($id),
        ]);
    }

    public function enrollCourse($index)
    {
        //get user
        $id = Auth::id();

        //get data based on user
        $course = Course::find($index);
        $enroll = enrolledCourse::find($id);
        $session = sessionCourse::find($id);

        //convert to a-f
        include app_path() . '/function/converter.php';

        //variable for change value
        $change = 1;
        $change2 = 0;
        $change3 = $course->enrolled;
        $change3 += 1;

        //failed - return
        if ($enroll->$index != 0) {
            return back()
                ->with('fail', 'Course Already Enrolled!');
        }

        //success - update database - return      
        else {
            $enroll->update([$index => $change]);
            $session->update([$index => $change2]);
            $course->update(['enrolled' => $change3]);
            return back()
                ->with('success', 'Course Enrolled!');
        }
    }

    public function addSession($index)
    {
        //get user & data
        $id = Auth::id();
        $course = Course::find($index);
        $session = sessionCourse::find($id);

        //convert to a-f
        include app_path() . '/function/converter.php';

        //variable for change data
        $change = $session->$index;
        $change += 1;

        //fail - back
        if ($session->$index > ($course->sessions) - 1) {
            return back()
                ->with('fail', 'All Sessions Already Completed!');
        } 
        
        //success - update database - back
        else {
            $session->update([$index => $change]);
            return back()
                ->with('success', '1 Session Completed!');
        }
    }

    public function home()
    {
        $id = Auth::id();
        return view('home', [
            "title" => "Home",
            "course" => Course::all(),
            "enroll" => enrolledCourse::find($id),
            "session" => sessionCourse::find($id),
        ]);
    }

    public function singleCourse(Course $id)
    {
        $index = Auth::id();
        return view(
            'singleCourse',
            [
                "title" => "Details",
                "course" => $id,
                "enroll" => enrolledCourse::find($index),
                "session" => sessionCourse::find($index)
            ]
        );
    }
}
