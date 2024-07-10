<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory;
    public static function createSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->name = $request->name;
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->save();
    }

    public static function UpdateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);
        self::$subCategory->name = $request->name;
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->save();
    }
    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        self::$subCategory->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
