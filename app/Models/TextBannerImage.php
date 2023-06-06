<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TextBannerImage
 *
 * @property int $id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBannerImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TextBannerImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'image'
    ];
}
