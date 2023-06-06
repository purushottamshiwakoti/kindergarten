<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SocialMediaSection
 *
 * @property int $id
 * @property string $title
 * @property string $heading
 * @property string $subheading
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereSubheading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SocialMediaSection extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'heading',
        'subheading',
    ];
}
