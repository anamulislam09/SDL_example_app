<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = Question::orderBy('id', 'DESC')->get();
        return view('pages.home', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $questions = $request->questions;
        $remarks = $request->remarks;
        for($i=0; $i<count($questions); $i++){
            Question::insert([
                'questions' => $questions[$i],
                'remarks' => $remarks[$i],
            ]);
        }
        return redirect()->back();
    }

    // show all questions 
   public function show(Request $request){
    $data = Question::orderBy('id', 'DESC')->get();
    return view('pages.show', compact('data'));
    } 

    // Edit questions 
    public function edit($id){
        $data = Question::FindOrFail($id);
        return view('pages.edit', compact('data'));
    }

    // Edit questions 
    public function update(Request $request){
        // dd($request);
        $id = $request->id;
        $data = Question::findOrFail($id);
        $data['questions'] = $request->questions;
        $data['remarks'] = $request->remarks;
        $data->save();
        return redirect()->route('questions.show');
    }

    // Delete questions 
    public function destroy($id){ 
        $data = Question::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
  
    // generate pdf 
    public function generatePdf(){
        $data = Question::all();
        $pdf = Pdf::loadView('pages.PdfQuestion', compact('data'));
        return $pdf->stream('Pdf-questions');
    }

    // Download pdf 
    public function downloadPdf(){
        $data = Question::all();
        $pdf = Pdf::loadView('pages.PdfQuestion', compact('data'));
        return $pdf->download('Pdf-questions.pdf');
    }

}
