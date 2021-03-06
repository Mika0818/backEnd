<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
       'img','title', 'content' ,'sort'
    ];


    public function news_imgs()
    {
        return $this->hasMany('App\NewsImgs');
    }
}
