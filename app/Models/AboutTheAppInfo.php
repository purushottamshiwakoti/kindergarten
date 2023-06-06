<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AboutTheAppInfo
 *
 * @property int $id
 * @property string $app_rating
 * @property string $active_users
 * @property string $protection_plan
 * @property string $investment_plan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereActiveUsers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereAppRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereInvestmentPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereProtectionPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutTheAppInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'app_rating','active_users','protection_plan','investment_plan'
    ];
}
