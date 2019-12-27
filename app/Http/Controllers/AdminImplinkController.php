<?php

namespace App\Http\Controllers;

use App\Implink;
use App\ImpPhone;
use App\Slideshow;
use Request;

class AdminImplinkController extends Controller
{
    public function implink(){
       $implink1 = Implink::find(1);
       $implink2 = Implink::find(2);
       $implink3 = Implink::find(3);
       $implink4 = Implink::find(4);
       $implink5 = Implink::find(5);
       return view('admin_home.implink.implink',compact('implink1','implink2','implink3','implink4','implink5'));

    }
    public function saveimplink(){
        $input = Request::all();

        $implink1 = Implink::find(1);
        $implink1->name_en = $input['1name_en'];
        $implink1->name_np = $input['1name_np'];
        $implink1->link = $input['1link'];
        $implink1->save();

        $implink2 = Implink::find(2);
        $implink2->name_en = $input['2name_en'];
        $implink2->name_np = $input['2name_np'];
        $implink2->link = $input['2link'];
        $implink2->save();

        $implink3 = Implink::find(3);
        $implink3->name_en = $input['3name_en'];
        $implink3->name_np = $input['3name_np'];
        $implink3->link = $input['3link'];
        $implink3->save();

        $implink4 = Implink::find(4);
        $implink4->name_en = $input['4name_en'];
        $implink4->name_np = $input['4name_np'];
        $implink4->link = $input['4link'];
        $implink4->save();

        $implink5 = Implink::find(5);
        $implink5->name_en = $input['5name_en'];
        $implink5->name_np = $input['5name_np'];
        $implink5->link = $input['5link'];
        $implink5->save();

        return redirect('implink');


    }


}
