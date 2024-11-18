<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseSubject extends Model
{
    use HasFactory;
    protected $table = 'course_subject';
    public $incrementing = false;
    protected $fillable = ['id','course_couse_id','subject_sub_id'];
}
