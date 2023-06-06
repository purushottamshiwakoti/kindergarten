<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HeaderBanner
 *
 * @property int $id
 * @property string $subtitle
 * @property string $heading
 * @property string $paragraph
 * @property string $button1
 * @property string $button2
 * @property string $buttonurl1
 * @property string $buttonurl2
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereButton1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereButton2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereButtonurl1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereButtonurl2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereImage4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereParagraph($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderBanner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HeaderBanner extends Model
{
    use HasFactory;

    protected $fillable=[
        'subtitle','heading','paragraph','button1','buttonurl1','button2','buttonurl2','image1','image2','image3','image4'
    ];
}
