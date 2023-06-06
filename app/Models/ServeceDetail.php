<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ServeceDetail
 *
 * @property int $id
 * @property string $servicedetail
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $service
 * @property-read int|null $service_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail whereServicedetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServeceDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServeceDetail extends Model
{
    use HasFactory;
    protected $fillable = ['servicedetail', 'slug'];

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
