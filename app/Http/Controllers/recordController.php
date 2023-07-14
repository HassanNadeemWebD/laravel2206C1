<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class recordController extends Controller
{

    function create(Request $request)
    {

        $request->validate([

            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'dob' => 'required'




        ]);

        $student = new Students();
        // echo "<pre>";
        // print_r($student->all());

        // echo "<pre>";

        $student->firstName = $request['fname'];
        $student->lastName = $request['lname'];
        $student->gender = $request['gender'];
        $student->contact = $request['contact'];
        $student->email = $request['email'];
        $student->dob = $request['dob'];
        $student->save();

        return redirect('/');
        // print_r($request->all());
        // echo "<pre>";
        // echo "Create";
    }

    function register()
    {
        $pageTitle = "Registration";


        return view('form', compact('pageTitle'));
    }

    function edit($id)
    {

        $find = Students::find($id);
        $pageTitle = "Update Info";
        $student =  $find->toArray();
        $route = "/update";        // print_r($student);
        return view('form', compact('pageTitle', 'student', 'route', 'id'));
    }

    function update(Request $request, $id)
    {
        // echo $id;
        $student = Students::find($id);
     
        // print_r($student);
        $student->firstName = $request['fname'];
        $student->lastName = $request['lname'];
        $student->gender = $request['gender'];
        $student->contact = $request['contact'];
        $student->email = $request['email'];
        $student->dob = $request['dob'];
        $student->save();
    }


    function delete($id){

        




    }

    function show()
    {
        $fetchAll = Students::all();
        $students = $fetchAll->toArray();
        //  echo "<pre>";
        //  print_r($students->toArray());

        return view('index', compact('students'));


        // echo "show";
    }
}
