<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $primaryKey = 'C_id';

    public function teacher()
    {
        return $this->belongsToMany(teacher::class,'course_teacher_pivot', 'course_id','teacher_id');
    }
}
