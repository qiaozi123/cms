<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GonglueController extends Controller
{
    public function index()
    {
        $article = Article::where(['belongto'=>1])->paginate(15);
        $hot = Article::where([])->orderby('see','desc')->limit(10)->get();
        return view('web.gonglue.list',compact('article','hot'));
    }

    public function show($id)
    {
        $data = Article::find($id);
        $data->see = $data->see+1;
        $data->save();
        // 获取 “上一篇” 的 ID
        $pre = Article::where('id', '<', $id)->max('id');

        // 同理，获取 “下一篇” 的 ID
        $next = Article::where('id', '>', $id)->min('id');
        $hot = Article::where([])->orderby('see','desc')->limit(10)->get();
        return view('web.gonglue.show',compact('data','hot','pre','next'));
    }

}
