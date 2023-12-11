<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignMaster extends Model
{
    use HasFactory;
    protected $fillable = [
        'dept_id',
        'que_id',
    ];
}
