<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vote
 *
 * @property int $id
 * @property int $account_id
 * @property int $candidates_id
 * @property int $university_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $account
 * @property-read \App\Models\Candidate $candidate
 * @property-read \App\Models\University $university
 * @method static \Illuminate\Database\Eloquent\Builder|Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereCandidatesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
