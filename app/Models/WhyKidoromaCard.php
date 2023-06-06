<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WhyKidoromaCard
 *
 * @property int $id
 * @property string $title1
 * @property string $image1
 * @property string $title2
 * @property string $image2
 * @property string $title3
 * @property string $image3
 * @property string $title4
 * @property string $image4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereImage4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereTitle4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaCard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WhyKidoromaCard extends Model
{
    use HasFactory;
    protected $fillable=[
        'title1','image1',
        'title2','image2',
        'title3','image3',
        'title4','image4',
    ];
}
