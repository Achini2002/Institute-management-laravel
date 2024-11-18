<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectResult extends Model
{
    use HasFactory;
    protected $incrementing = false;
    protected $fillable = ['id','subject_sub_id','result_result_id'];

}
