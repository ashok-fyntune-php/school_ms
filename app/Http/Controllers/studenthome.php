<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;
class studenthome extends Controller
{
    public function studentForm(){
        return view("");

    }

    public function postStudentForm(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'standard' => 'required',
            'class_teacher_name' => 'required',

            'scanned_copy' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
              $student    = new CourseModel;
            $student->f_name   = $request['first_name'];
            $student->l_name   = $request['last_name'];
            $student->standard = $request['standard'];
            $student->class_teacher_name = $request['class_teacher_name'];
            $student->suggestion = $request['suggestion'];
            $student->scanned_copy = $request['scanned_copy'];
    }
}
