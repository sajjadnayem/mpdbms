<?php

namespace App\Models;

use App\Models\Machine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function machine()
    {
        return $this->belongsTo(Machine::class,'machine_id','id');
    }
}
