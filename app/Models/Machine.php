<?php

namespace App\Models;
use App\Models\MachineMedicine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function medicine()
    {
        return $this->hasMany(MachineMedicine::class,'machine_id','id');
    }
}
