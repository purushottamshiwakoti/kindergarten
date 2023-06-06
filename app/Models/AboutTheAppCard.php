<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AboutTheAppCard
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppCard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutTheAppCard extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','image'
    ];
}
