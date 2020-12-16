<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pardis
 *
 * @property int $id
 * @property int $pardiscod
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\University[] $university
 * @property-read int|null $university_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis wherePardiscod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pardis whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pardis extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function university(){
        return $this->hasMany(University::class,'pardis_id','id');
    }
}
