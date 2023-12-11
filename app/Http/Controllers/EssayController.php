<?php

namespace App\Http\Controllers;

use App\Models\EditEssay;
use App\Models\Essay;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EssayController extends Controller
{
    // show essay 
    public function index()
    {
        $data = Essay::orderBy('id', 'DESC')->get();
        return view('pages.essay.index', compact('data'));
    }
    // create essay 
    public function create()
    {
        return view('pages.essay.create');
    }

    // store essay 
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:essays|max:100',
        ]);

        // using eloquent orm
        Essay::insert([
            'title' => $request->title,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'date' => date('Y-m-d H:i:s'),

        ]);

        return redirect()->route('essay.index');
    }
    // show essay another page
    public function show()
    {
        $data = Essay::orderBy('id', 'DESC')->get();
        return view('pages.essay.show', compact('data'));
    }

    // Download pdf 
    public function essayPdf($id)
    {
        $data = Essay::FindOrFail($id);
        $pdf = Pdf::loadView('pages.essay.report', compact('data'));
        return $pdf->stream('essay.pdf');
    }

    // edit essay 
    public function edit($id)
    {
        $data = Essay::FindOrFail($id);
        return view('pages.essay.edit', compact('data'));
    }

    // update essay 
    public function update(Request $request)
    {
        $id = $request->id;
        $maxNo = EditEssay::where('essay_id', '=', $id)->max('update_id') + 1;
        EditEssay::insert([
            'essay_id' => $id,
            'update_id' => $maxNo,
            'title' => $request->title,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'date' => date('Y-m-d H:i:s'),
        ]);

        $data = DB::table('edit_essays')->where('essay_id', '=', $id)
            ->where('update_id', '=', $maxNo)
            ->first();
        return view('pages.essay.singleEdit', compact('data'));
    }

    public function editableEssay()
    {
        $data = EditEssay::orderBy('id', 'DESC')->get();
        return view('pages.essay.show_editable_essay', compact('data'));
    }

    // Delete essay 
    public function destroy($id)
    {
        $data = Essay::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
