<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $primaryKey = 'exam_id';
    public function result(): mixed
    {
        return $this->hasMany(result::class,'exam_exam_id');
    }
}
