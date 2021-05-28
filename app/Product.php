<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['category_id','title','description','cost_price','price'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
