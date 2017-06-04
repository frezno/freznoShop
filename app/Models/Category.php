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
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get all categories.
     *
     * @param  int $parent_id  id of categories.
     * @param  int $group      id of category group.
     * @param  bool $active    record is active or not.
     * @return array
     */
    public static function getCategories($parent_id, $group, $active = 1)
    {
        //-- This query is used for navigation
        //-- to get just the active entries.
        if ($active === 1) {
            return static::where('parent_id', '=', $parent_id)
                            ->where('c_group', '=', $group)
                            ->where('active', '=', 1)
                            ->orderBy('sortorder')
                            ->get();
        } 
         //-- Whereas this query is used in the Admin area
         //-- to get ALL entries instead, active or not.
         else {
            return static::where('parent_id', '=', $parent_id)
                            ->where('c_group', '=', $group)
                            ->orderBy('sortorder')
                            ->get();
        }
    }
}
