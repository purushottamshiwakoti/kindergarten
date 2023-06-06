<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WhyKidoromaImages
 *
 * @property int $id
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereImage4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaImages whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WhyKidoromaImages extends Model
{
    use HasFactory;
    protected $fillable=[
        'image1',
        'image2',
        'image3',
        'image4',
    ];
}
