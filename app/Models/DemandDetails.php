<?php

namespace App\Models;

use App\Models\User;
use App\Models\Demand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandDetails extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function demandmedicine()
    {
        return $this->hasMany(DemandMedicine::class,'id','demandmedicine_id');
    }
    // public function UserDetails()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    

}
