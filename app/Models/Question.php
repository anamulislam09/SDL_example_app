<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'questions',
        'remarks',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
