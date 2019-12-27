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
        $staff->phone_no = $input['phoneno'];
        $staff->phone_no_np = $input['phoneno_np'];
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
        $staff->phone_no = $input['phoneno'];
        $staff->phone_no_np = $input['phoneno_np'];
        $staff->position_en = $input['position_en'];
        $staff->position_np = $input['position_np'];
        $staff->imgpath = $input['imgpath'];
        $staff->save();
        return redirect('orgtechhead');
    }
    public function staff(){
        $staffs = Staff::where('post','staff')->get();
        return view('admin_home.ostaff.staff',compact('staffs'));
    }
    public function createstaff(){
        return view('admin_home.ostaff.create');
    }
    public function savecreatestaff(){
        $input = Request::all();
        $staff = new Staff();
        $staff->name_en = $input['name_en'];
        $staff->name_np = $input['name_np'];
        $staff->position_en = $input['position_en'];
        $staff->position_np = $input['position_np'];
        $staff->phone_no = $input['phoneno'];
        $staff->phone_no_np = $input['phoneno_np'];
        $staff->imgpath = $input['imgpath'];
        $staff->post = 'staff';
        $staff->save();
        return redirect('adminstaff');
    }
    public function editstaff($staffitem){
        $staff = Staff::find($staffitem);
        return view('admin_home.ostaff.edit',compact('staff'));
    }
    public function saveeditstaff($staffitem){
        $input = Request::all();
        $staff = Staff::find($staffitem);
        $staff->name_en = $input['name_en'];
        $staff->name_np = $input['name_np'];
        $staff->position_en = $input['position_en'];
        $staff->position_np = $input['position_np'];
        $staff->phone_no_np = $input['phoneno_np'];
        $staff->phone_no = $input['phoneno'];
        $staff->imgpath = $input['imgpath'];
        $staff->post = 'staff';
        $staff->save();
        return redirect('adminstaff');
    }
    public function deletestaff($staffitem){
        $staff = Staff::find($staffitem);
        $staff->delete();
        return redirect('adminstaff');
    }
}
