<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HomePage
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomePage extends Model
{
    use HasFactory;
}
