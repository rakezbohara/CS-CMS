<?php

namespace App\Http\Controllers;

use App\Marquee;
use Request;

class AdminMarqueeController extends Controller
{
    public function marquee(){
        $marquee1 = Marquee::find(1);
        $marquee2 = Marquee::find(2);
        $marquee3 = Marquee::find(3);
        $marquee4 = Marquee::find(4);
        return view('admin_home.marquee.marquee',compact('marquee1','marquee2','marquee3','marquee4'));
    }
    public function savemarquee(){
        $input = Request::all();

        $marquee1 = Marquee::find(1);
        $marquee1->title_en = $input['marquee1_en'];
        $marquee1->title_np = $input['marquee1_np'];
        $marquee1->save();

        $marquee2 = Marquee::find(2);
        $marquee2->title_en = $input['marquee2_en'];
        $marquee2->title_np = $input['marquee2_np'];
        $marquee2->save();

        $marquee3 = Marquee::find(3);
        $marquee3->title_en = $input['marquee3_en'];
        $marquee3->title_np = $input['marquee3_np'];
        $marquee3->save();

        $marquee4 = Marquee::find(4);
        $marquee4->title_en = $input['marquee4_en'];
        $marquee4->title_np = $input['marquee4_np'];
        $marquee4->save();

        return redirect('marquee');
    }
}
