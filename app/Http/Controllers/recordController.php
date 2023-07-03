<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recordController extends Controller
{

    function create(Request $request)
    {

        echo "<pre>";
        print_r($request->all());
        echo "<pre>";
        echo "Create";
    }

    function register()
    {

        return view('form');
    }


    function update()
    {

        echo "update";
    }

    function show()
    {

        echo "show";
    }
}
