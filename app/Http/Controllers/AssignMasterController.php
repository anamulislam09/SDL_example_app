<?php

namespace App\Http\Controllers;

use App\Models\AssignMaster;
use App\Models\Department;
use App\Models\Question;
use Illuminate\Http\Request;

class AssignMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AssignMaster::orderBy('id', 'DESC')->get();
        return view('pages.AssignmentMaster.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept = Department::all();
        $que = Question::all();
        return view('pages.AssignmentMaster.create', compact('dept', 'que'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $dept = $request->dept;
        $questions = $request->questions;
        for ($i = 0; $i < count($dept); $i++) {
            AssignMaster::insert([
                'dept_id' => $dept[$i],
                'que_id' => $questions[$i],
            ]);
        }
        return redirect()->route('assignMaster.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignMaster  $assignMaster
     * @return \Illuminate\Http\Response
     */
    public function show(AssignMaster $assignMaster)
    {
        $data = AssignMaster::orderBy('id', 'DESC')->get();
        return view('pages.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignMaster  $assignMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignMaster $assignMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssignMaster  $assignMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignMaster $assignMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignMaster  $assignMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignMaster $assignMaster)
    {
        //
    }
}
