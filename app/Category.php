<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
        // PostはCategoryを何回も利用できる
    }
    
    public function getByCategory(int $limit_count = 5)
    {
        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // $thisはcategoryでposts()はid=2しか取れていない。それを$thisと結び付けて、またwith('category')で名前と結び付ける
    }
    //
}
