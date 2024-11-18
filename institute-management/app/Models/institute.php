<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    use HasFactory;
    protected $primaryKey = "inst_id";

    public function branch(): mixed
    {
        return $this->belongsTo(branch::class, 'branch_branch_id');
    }
}
