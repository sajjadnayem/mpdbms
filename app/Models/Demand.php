<?php

namespace App\Models;

use App\Models\User;
use App\Models\Medicine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demand extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function demandDetails()
    {
        return $this->hasMany(DemandDetails::class,'demand_id','id');
    }
    // public function UserDetails()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    // 
}
