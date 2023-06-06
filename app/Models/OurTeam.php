<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OurTeam
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $image
 * @property string|null $position
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OurTeam extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'description', 'position'];
}
