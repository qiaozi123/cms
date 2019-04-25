<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use App\Model\Designer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignerController extends Controller
{

    public function create()
    {
        return view('admin.designer.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $job =  $request->input('job');
        $time_id=  $request->input('time_id');
        $style_id=  $request->input('style_id');
        $studio_id =  $request->input('studio_id');
        $price_id =  $request->input('price_id');
        $ideal =  $request->input('dream');
        $avatar=  $request->input('avatar');
        $articleteam = new Designer();
        $articleteam->name = $name;
        $articleteam->job = $job;
        $articleteam->time_id = $time_id;
        $articleteam->style_id = $style_id;
        $articleteam->studio_id = $studio_id;
        $articleteam->price_id = $price_id;
        $articleteam->dream = $ideal;
        $articleteam->avatar = $avatar;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加设计师成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加设计师失败']);
        }
    }

    public function list()
    {
        $data = Designer::all();
        return view('admin.designer.list',compact('data'));
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
