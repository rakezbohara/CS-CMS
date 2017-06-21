<?php

namespace App\Http\Controllers;


use Request;
use App\blogpost;

class AdminHomeController extends Controller
{
    public function blogpost(){
        $blogpost = blogpost::all();
        return view('admin_home.blog.blogpost',compact('blogpost'));
    }
    public function createblogpost(){
        return view('admin_home.blog.create');
    }
    public function savecreateblogpost(){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $blogpost = new blogpost();
        $blogpost->title = $input['title'];
        $blogpost->content = $input['ckeditor'];
        $blogpost->pubdate = $input['pubdate'];
        $blogpost->save();
        return redirect('/blogpost');
    }
    public function editblogpost($blogitem){
        $blogpost = blogpost::find($blogitem);
        //return $blogpost;
        return view('admin_home.blog.edit',compact('blogpost'));
    }
    public function saveeditblogpost($blogitem){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $blogpost = blogpost::find($blogitem);
        $blogpost->title = $input['title'];
        $blogpost->content = $input['ckeditor'];
        $blogpost->pubdate = $input['pubdate'];
        $blogpost->save();
        $blogpost = blogpost::all();
        return redirect('/blogpost');
    }
    public function deleteblogpost($blogitem){
        $blogpost = blogpost::find($blogitem);
        $blogpost->delete();
        return redirect('/blogpost');
    }
}
