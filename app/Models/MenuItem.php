<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MenuItem
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property int $menu_id
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, MenuItem> $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereUrl($value)
 * @mixin \Eloquent
 */
class MenuItem extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'url',
        'menu_id',
        'parent_id',
        'sort_order',
    ];



    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }

    public static function tree()
    {

        // $allCategory = MenuItem::orderBy('sort_by', 'ASC')->get();
        $allCategory = MenuItem::orderBy('sort_order')->get();
        $rootCategories = $allCategory->where('parent_id', 0);
        self::formatTree($rootCategories, $allCategory);
        return $rootCategories;
    }

    private static function formatTree($categories, $allCategory)
    {
        foreach ($categories as $category) {
            $category->children = $allCategory->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategory);
            }
        }
    }




    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }


    // public function menu(){
    //     return $this->belongsTo(Menu::class,'menu_id');
    // }



    //     public function scopeParents($query)
    //     {
    //         return $query->whereNull('parent_id')->orWhere('parent_id',0);
    //     }


}
