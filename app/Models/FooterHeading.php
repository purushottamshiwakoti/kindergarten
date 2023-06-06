<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FooterHeading
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterHeading whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FooterHeading extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];
}
