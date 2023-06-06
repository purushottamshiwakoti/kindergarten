<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OurWork
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $image
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurWork whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OurWork extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'description'];
}
