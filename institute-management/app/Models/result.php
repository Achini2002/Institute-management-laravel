<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    protected $primaryKey = 'result_id';
    public function student(): mixed
    {
        return $this->belongsTo(student::class, 'student_stu_id');
    }

    public function exam(): mixed
    {
        return $this->belongsTo(exam::class, 'exam_exam_id');
    }

    public function subject(): mixed
    {
        return $this->belongsTo(subject::class, 'subject_result','result_result_id','subject_sub_id');
    }


}
