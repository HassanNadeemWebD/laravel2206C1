<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
   echo "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       echo "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     echo "destroy";
    }
}
