<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=CourseModel::all();
        return view("showAllcourse")->with('course',$courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $course=new CourseModel;
          $course->Course_Name = $request->Course_Name;
          $course->Teacher_Name = $request->Teacher_Name;
          $course->Batch_Time = $request->Batch_Time;
          $course->Teaching_Day = $request->Teaching_day;
          $course->save();
          return redirect ("course");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $course= CourseModel::find($id);
         $course->delete();
         return redirect("course");

    }
}
