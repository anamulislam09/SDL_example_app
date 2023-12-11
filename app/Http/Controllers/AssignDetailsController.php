<?php

namespace App\Http\Controllers;

use App\Models\AssignDetails;
use App\Models\AssignMaster;
use App\Models\Department;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Department::all();

        // dd($data);
        return view('pages.AssignmentDetails.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function question(Request $request){

        $deptid = $request->deptid;
        $questions = AssignMaster::join('questions','questions.id','=','assign_masters.que_id')
                    ->where('assign_masters.dept_id', $deptid)
                    ->get();
        return response()->json($questions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignDetails  $assignDetails
     * @return \Illuminate\Http\Response
     */
    public function show(AssignDetails $assignDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignDetails  $assignDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignDetails $assignDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssignDetails  $assignDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignDetails $assignDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignDetails  $assignDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignDetails $assignDetails)
    {
        //
    }
}
