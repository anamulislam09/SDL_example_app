<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditEssay extends Model
{
    use HasFactory;
    protected $fillable = [
        'essay_id',
        'edit_id',
        'title',
        'description1',
        'description2',
        'description3',
        'date',
    ];
}
