<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $primary = 'stu_id';
    public function result(): mixed
        {
        return $this->hasMany(result::class, 'student_stu_id');
        }

        public function cource(): mixed
        {
            return $this->belongsToMany(course::class,'cource_student','student_stu_id','cource_cource_id');
        }



}
