<?php

namespace App\Http\Controllers\Api;

use App\Models\StudentAlpha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StudentAlphaController extends Controller
{
    public function index(){
      //  dd("hello");
      //let us fetch data from our database
      //lets create one variable $student Student model all() function
         $students =  StudentAlpha::all(); //this will return all data
         if($students->count()> 0){     //no.of rows greater than zero

             return response()->json([
                'status' => 200,
                'message' => $students
             ],200);
         }
         else{
            return response()->json([
                'status' => 404,
                'message' => 'N0 Such student found'
            ],404);
         }

    }

    public function store(Request $request){
            dd($request->all());
          $validator =   Validator::make($request->all(),[
              'name' => 'required|string|max:40',
              'course' => 'required|string|max:40',
              'email' => 'required|email|max:40',
              'phone' => 'required|digits:10',

                   ]);
           if($validator->fails()){

            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ],422); //here you pass array and give ,422 {input error}
           }
           else{
                          $student =StudentAlpha::create([
                            'name' => $request->name,
                            'course' => $request->course,
                            'email' => $request->email,
                            'phone' => $request->phone,

                          ]
                          );
                          if($student){
                            return response()->json([
                                'status' => 200,
                                'errors' => 'student added successfully',
                            ],200);
                          }else{
                            return response()->json([
                                'status' => 500,
                                'errors' => 'something went wrongss',
                            ],500);
                          }
           }
    }
}
