<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    use HasFactory;
    protected $primaryKey = 'branch_id';
    public function course(): mixed
    {
        return $this->belongsTo(course::class,'cource_cource_id');
    }

    public function institutes(): mixed
    {
        return $this->belongsTo(institute::class,'branch_branch_id');
    }
}
