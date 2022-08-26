<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // まずupdated_atの順番で並べた後、件数を5件に絞ってそれを取得する。
        // 書かれているもののインスタンス$this
        // postsモデルはpostsテーブルの情報をとってくる
    }
    //
}
