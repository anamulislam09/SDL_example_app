<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =Department::orderBy('id', 'DESC')->get();
        return view('pages.department.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.department.create',);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dept' => 'required|unique:departments|max:75',
        ]);

        // using eloquent orm
        Department::insert([
            'dept' => $request->dept,
        ]);
        $notification = array('message'=>'department added successfully.','alert_type'=>'success');
        return redirect()->route('dept.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Department::FindOrFail($id);
        return view('pages.department.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'dept' => 'required|max:75',
        ]);

        $id = $request->id;
        $data = Department::findOrFail($id);
        $data['dept'] = $request->dept;
        $data->save();
        $notification = array('message'=>'department Updated successfully.','alert_type'=>'success');
        return redirect()->route('dept.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Department::FindOrFail($id);
        $data->delete();
        $notification = array('message'=>'department Updated successfully.','alert_type'=>'success');
        return redirect()->route('dept.index')->with($notification);
    }
}
