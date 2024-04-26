<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_teacher_pivot extends Model
{
    use HasFactory;
   protected $table = 'course_teacher_pivot';
    protected $primaryKey = 'id';
}
