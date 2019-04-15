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
        $jobtime =  $request->input('jobage');
        $style=  $request->input('style');
        $studio =  $request->input('studio');
        $desig_price =  $request->input('price');
        $ideal =  $request->input('dream');
        $avatar=  $request->input('avatar');
        $articleteam = new Designer();
        $articleteam->name = $name;
        $articleteam->job = $job;
        $articleteam->job_age = $jobtime;
        $articleteam->style = $style;
        $articleteam->studio = $studio;
        $articleteam->price = $desig_price;
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
