<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Candidate
 *
 * @property int $id
 * @property int $account_id
 * @property int $commission
 * @property int $audit_board
 * @property int $university_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $account
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereAuditBoard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function account(){
        return $this->belongsTo(Account::class,'account_id','id');
    }
}
