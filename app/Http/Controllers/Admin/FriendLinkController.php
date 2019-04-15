<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use App\Model\Brands;
use App\Model\Cases;
use App\Model\FriendLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FriendLinkController extends Controller
{

    public function create()
    {
        return view('admin.friendlink.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $link_url =  $request->input('link_url');

        $articleteam = new FriendLink();
        $articleteam->name = $name;
        $articleteam->link_url = $link_url;
        $articleteam->save();
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加友链成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加友链失败']);
        }
    }

    public function list()
    {
        $data = FriendLink::all();
        return view('admin.friendlink.list',compact('data'));
    }

    public function delete(Request $request)
    {
        $id =$request->input('id');

        $post = FriendLink::find($id);
        $bool = $post->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'删除失败']);
        }
    }
}
