<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'sub_id';
    public function result(): mixed
    {
        return $this->belongsToMany(course::class,'cource_subject','subject_sub_id','result_result_id');
    }

    public function course(): mixed
    {
        return $this->belongsToMany(course::class,'course_subject','subject_sub_id','course_course_id');
    }

}
