<?php

namespace App\Models;

use App\Models\Generic;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function generic()
    {
        return $this->belongsTo(Generic::class);
    }
}
