<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['title'];

    public function products()
    {

    	return $this->hasMany(Product::class);
    }


    public static function arrayForSelect()
    {
    	$arr = [];
    	$categories = Category::all();
    	foreach ($categories as $category){
    		$arr[$category->id] = $category->title;
    	}
        return $arr;
    } 
}
