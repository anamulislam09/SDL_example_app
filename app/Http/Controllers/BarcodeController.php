<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BarcodeController extends Controller
{
    public function barcodeCreate(){
        return view('pages.barcode.create');
    }
    public function barcodeShow(Request $request){
        $data = $request->code;
        $number = $request->number;
        return view('pages.barcode.index', compact('data','number'));
    }

    public function qrcodeCreate(){
        return view('pages.qrcode.create');
    }

    public function qrcodeShow(Request $request){
        $data = $request->code;
        $number = $request->number;
        return view('pages.qrcode.index', compact('data','number'));
    }

    // public function qrcodeprint(Request $request){
    //     $data = $request->code;
    //     $number = $request->number;
    //     dd($number);
    //     $pdf = Pdf::loadView('pages.qrcode.PdfQuestion', compact('data','number'));
    //     return $pdf->stream('Pdf-questions');


    // }
}
