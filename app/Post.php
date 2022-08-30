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
    ];
    // これがないと保存できない
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // まずupdated_atの順番で並べた後、件数を5件に絞ってそれを取得する。
        // 書かれているもののインスタンス$this
        // postsモデルはpostsテーブルの情報をとってくる
    }
    //
}
