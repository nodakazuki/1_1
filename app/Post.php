<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'store_id',
        'user_id'
    ];
    // これがないと保存できない
    public function getPaginateByLimit(int $limit_count = 5)
     {
         return $this::with('user')->orderBy('updated_at','DESC')->paginate($limit_count);
    //     return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    //     // まずupdated_atの順番で並べた後、件数を5件に絞ってそれを取得する。
    //     // 書かれているもののインスタンス$this
    //     // postsモデルはpostsテーブルの情報をとってくる
    //     // これがないとControllerで使えない。ここで設計書を書いて実際にインスタンス化して使う。
     }
    
    //  public function category()
    //  {
    //      return $this->belongsTo('App\Category');
    //  }
     
     public function users()
     {
         return $this->belongsTo('App\User');
     }
    // //
}
