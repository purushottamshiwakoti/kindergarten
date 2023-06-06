<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PhotoTextBannerDescription
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoTextBannerDescription whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhotoTextBannerDescription extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];
}
