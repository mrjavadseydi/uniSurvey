<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Account
 *
 * @property int $id
 * @property string|null $PersonID
 * @property string|null $UserID
 * @property string|null $FacultyCode
 * @property string|null $EduGrpCode
 * @property string|null $UnitCode
 * @property string|null $PProFName
 * @property string|null $PProLName
 * @property string|null $FullName
 * @property string|null $EProFName
 * @property string|null $EProLName
 * @property string|null $ProCode
 * @property string|null $DutyUnit
 * @property string|null $sex
 * @property string|null $EProTitle
 * @property string|null $PProTitle
 * @property string|null $person_type
 * @property string|null $ProType
 * @property string|null $account_no
 * @property string|null $BankName
 * @property string|null $science_level
 * @property string|null $emp_mode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereAccountNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereDutyUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEProFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEProLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEProTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEduGrpCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEmpMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereFacultyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePProFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePProLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePProTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePersonID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePersonType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereProCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereProType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereScienceLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUnitCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUserID($value)
 * @mixin \Eloquent
 */
class Account extends Model
{
    use HasFactory;
    protected $guarded=[];
}
