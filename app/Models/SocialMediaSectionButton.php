<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SocialMediaSectionButton
 *
 * @property int $id
 * @property string $button1
 * @property string $buttonurl1
 * @property string $button2
 * @property string $buttonurl2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereButton1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereButton2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereButtonurl1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereButtonurl2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialMediaSectionButton whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SocialMediaSectionButton extends Model
{
    use HasFactory;
    protected $fillable=[
        'button1','buttonurl1','button2','buttonurl2'
    ];

}
