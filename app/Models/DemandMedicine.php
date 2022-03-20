<?php

namespace App\Models;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandMedicine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class,'medicine_id','id');
    }
}
