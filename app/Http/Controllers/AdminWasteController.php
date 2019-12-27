<?php

namespace App\Http\Controllers;

use Request;
use App\WasteRoutine;

class AdminWasteController extends Controller
{
    public function wasteroutine(){
        $routine1 = WasteRoutine::find(1);
        $routine2 = WasteRoutine::find(2);
        $routine3 = WasteRoutine::find(3);
        $routine4 = WasteRoutine::find(4);
        $routine5 = WasteRoutine::find(5);
        $routine6 = WasteRoutine::find(6);
        $routine7 = WasteRoutine::find(7);
        return view('admin_home.waste',compact('routine1','routine2','routine3','routine4','routine5','routine6','routine7'));

    }
    public function savewasteroutine(){
        $input = Request::all();

        $routine1 = WasteRoutine::find(1);
        $routine1->path = $input['routine1'];
        $routine1->save();

        $routine2 = WasteRoutine::find(2);
        $routine2->path = $input['routine2'];
        $routine2->save();

        $routine3 = WasteRoutine::find(3);
        $routine3->path = $input['routine3'];
        $routine3->save();

        $routine4 = WasteRoutine::find(4);
        $routine4->path = $input['routine4'];
        $routine4->save();

        $routine5 = WasteRoutine::find(5);
        $routine5->path = $input['routine5'];
        $routine5->save();

        $routine6 = WasteRoutine::find(6);
        $routine6->path = $input['routine6'];
        $routine6->save();

        $routine7 = WasteRoutine::find(7);
        $routine7->path = $input['routine7'];
        $routine7->save();

        return redirect('adminwaste');
    }
}
