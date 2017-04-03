<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * No timestamps used.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get all categories of the selected parent id.
     *
     * @param  int $parent_id  id of categories.
     * @param  int $group      id of category group.
     * @return array
     */
    public static function getCategories($parent_id, $group)
    {
        return self::where('parent_id', '=', $parent_id)
                        ->where('c_group', '=', $group)
                        ->where('active', '=', 1)
                        ->orderBy('sortorder')
                        ->get();
    }
}
