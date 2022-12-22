<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    protected $table = 'syllabusdata';
   protected $primerykey = 'id';
   protected $fillable =['Year/Regulate','Department','Program','Semester','Max_time','Credits','File'];
}
