<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function team()
    {
        $data = Articlele_team::all();
        return view('admin.article.team.list',compact('data'));
    }

    public function create()
    {
        return view('admin.article.team.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $en_name =  $request->input('en_name');
        $articleteam = new Articlele_team();
        $articleteam->name = $name;
        $articleteam->en_name = $en_name;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加权限成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加权限失败']);
        }
    }

    public function list()
    {
        $data = Article::all();
        return view('admin.article.list',compact('data'));
    }

    public function creteartcle()
    {
        $team = Articlele_team::all();
        return view('admin.article.create',compact('team'));
    }

    public function docreteartcle(Request $request)
    {
          $name = $request->input('name');
          $keyword = $request->input('keyword');
          $author = $request->input('author');
          $belongto = $request->input('belongto');
          $avatar = $request->input('avatar');
          $content = $request->input('content');
          $article = new Article();
          $article->title = $name;
          $article->keyword = $keyword;
          $article->author = $author;
          $article->belongto = $belongto;
          $article->avatar = $avatar;
          $article->content= $content;
          $bool = $article->save();
          if ($bool){
              return response()->json(['status'=>200,'msg'=>'添加成功']);
          }else{
              return response()->json(['status'=>500,'msg'=>'添加失败']);
          }

    }
}
