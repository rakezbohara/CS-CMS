<?php

namespace App\Http\Controllers;

use Request;
use App\Staff;
class AdminStaffController extends Controller
{
    public function orghead(){
        $staff = Staff::where('post','orghead')->first();
        return view('admin_home.staff.orghead',compact('staff'));
    }

    public function saveorghead(){
        $input = Request::all();
        $staff = Staff::where('post','orghead')->first();
        $staff->name_en = $input['name_en'];
        $staff->name_np = $input['name_np'];
        $staff->position_en = $input['position_en'];
        $staff->position_np = $input['position_np'];
        $staff->imgpath = $input['imgpath'];
        $staff->save();
        return redirect('orghead');

    }

    public function orgtechhead(){
        $staff = Staff::where('post','orgtechhead')->first();
        return view('admin_home.staff.orgtechhead',compact('staff'));
    }

    public function saveorgtechhead(){
        $input = Request::all();
        $staff = Staff::where('post','orgtechhead')->first();
        $staff->name_en = $input['name_en'];
        $staff->name_np = $input['name_np'];
        $staff->position_en = $input['position_en'];
        $staff->position_np = $input['position_np'];
        $staff->imgpath = $input['imgpath'];
        $staff->save();
        return redirect('orgtechhead');

    }
}
