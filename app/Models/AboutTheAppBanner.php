<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AboutTheAppBanner
 *
 * @property int $id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppBanner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutTheAppBanner extends Model
{
    use HasFactory;
    protected $fillable=['image'];
}
