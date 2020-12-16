<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AccountStatus
 *
 * @property int $id
 * @property int $account_id
 * @property int $has_vote
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $Account
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus whereHasVote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccountStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AccountStatus extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function Account(){
        return $this->belongsTo(Account::class,'account_id','id');
    }
}
