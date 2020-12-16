<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pardis extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function university(){
        return $this->hasMany(University::class,'pardis_id','id');
    }
}
