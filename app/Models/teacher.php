<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
   
    
    protected $primaryKey = 'Teacher_id';

    public function course()
    {
      
            return $this->belongsToMany(course::class,'course_teacher_pivot','course_id', 'teacher_id');
      
       
       
    }
    
}
