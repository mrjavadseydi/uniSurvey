<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\University
 *
 * @property int $id
 * @property int $unicod
 * @property string $title
 * @property int $pardis_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pardis $pardis
 * @method static \Illuminate\Database\Eloquent\Builder|University newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|University query()
 * @method static \Illuminate\Database\Eloquent\Builder|University whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University wherePardisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereUnicod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|University whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class University extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pardis(){
        return $this->belongsTo(Pardis::class,'pardis_id','id');
    }
}
