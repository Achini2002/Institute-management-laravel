<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $primaryKey = "course_id";
    public function student(): mixed
    {
        return $this->belongsToMany(student::class,'course_student','cource_cource_id','student_stu_id');
    }

    public function subject(): mixed
    {
        return $this->belongsToMany(subject::class,'course_subject','cource_cource_id','subject_sub_id');
    }

    public function branches(): mixed
    {
        return $this->belongsToMany(branch::class,foreignPivotKey: 'cource_cource_id');
    }
}
