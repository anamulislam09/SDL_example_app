<?php

namespace App\Http\Controllers;

use App\Models\EditEssay;
use App\Models\Essay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditEssayController extends Controller
{

    // public function editableEssay($maxNo)
    // {
    //     $data = DB::table('edit_essays')->where('update_id', '=', $maxNo)
    //         ->first();
    //     return view('pages.essay.singleEdit', compact('data'));
    // }

}
