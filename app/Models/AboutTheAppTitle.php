<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AboutTheAppTitle
 *
 * @property int $id
 * @property string $title
 * @property string $heading
 * @property string $subheading
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereSubheading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutTheAppTitle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutTheAppTitle extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','heading','subheading',
    ];
}
