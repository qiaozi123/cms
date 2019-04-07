<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public static function Pic_Article($ename,$limit)
    {
        $data = Article::where(['articles.show'=>1,'article_teams.en_name'=>$ename])
            ->join('article_teams','article_teams.id','=','articles.belongto')
            ->limit($limit)
            ->get();
        return $data;
    }

    public static function Article($ename,$limit)
    {
        $data = Article::where(['articles.show'=>0,'article_teams.en_name'=>$ename])
            ->join('article_teams','article_teams.id','=','articles.belongto')
            ->limit($limit)
            ->get();
        return $data;
    }

}
