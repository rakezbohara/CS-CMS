<?php

namespace App\Http\Controllers;



use Request;
use App\Slideshow;

class AdminSlideController extends Controller
{
    public function slideshow(){
        $slideshow = Slideshow::all();
        return view('admin_home.slideshow.slideshow',compact('slideshow'));
    }
    public function createslide(){
        return view('admin_home.slideshow.create');
    }
    public function savecreateslide(){
        $input = Request::all();
        $slideshow = new Slideshow();
        $slideshow->title = $input['title'];
        $slideshow->desc = $input['desc'];
        $slideshow->imgpath = $input['imgpath'];
        $slideshow->save();
        return redirect('slide');
    }
    public function editslide($slideitem){
        $slideshow = Slideshow::find($slideitem);
        return view('admin_home.slideshow.edit',compact('slideshow'));
    }
    public function saveeditslide($slideitem){
        $input = Request::all();
        $slideshow = Slideshow::find($slideitem);
        $slideshow->title = $input['title'];
        $slideshow->desc = $input['desc'];
        $slideshow->imgpath = $input['imgpath'];
        $slideshow->save();
        return redirect('slide');

    }
    public function deleteslide($slideitem){
        $slideshow = Slideshow::find($slideitem);
        $slideshow->delete();
        return redirect('slide');
    }
}
