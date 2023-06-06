<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WhyKidoromaTitle
 *
 * @property int $id
 * @property string $subtitle
 * @property string $heading
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyKidoromaTitle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WhyKidoromaTitle extends Model
{
    use HasFactory;
    protected $fillable=[
        'subtitle','heading'
    ];
}
