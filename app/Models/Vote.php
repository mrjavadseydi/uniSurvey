<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function account(){
        return $this->belongsTo(Account::class,'account_id','id');
    }
    public function candidate(){
        return $this->belongsTo(Candidate::class,'candidates_id','id');
    }
    public function university(){
        return $this->belongsTo(University::class,'university_id','id');
    }
}
