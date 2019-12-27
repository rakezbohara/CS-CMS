<?php

namespace App\Http\Controllers;

use App\ImpPhone;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminImpPhoneController extends Controller
{
    public function index()
    {
        $numbers = ImpPhone::all();
        return view("admin_home.impPhone.index", compact('numbers'));
    }
    public function saveNumber(Request $request)
    {
        $this->validate($request, [
            'name_en' => 'required',
            'name_np' => 'required',
            'number_en' => 'required',
            'number_np' => 'required'
        ]);

        $number = new ImpPhone();
        $number->name_en = $request->name_en;
        $number->name_np = $request->name_np;
        $number->phone_en = $request->number_en;
        $number->phone_np = $request->number_np;
        $number->save();

        return redirect('impPhone');
    }

    public function edit($id)
    {
        $number = ImpPhone::find($id);
        return view('admin_home.impPhone.edit',compact('number'));
    }

    public function upload(Request $request, $id)
    {
        $this->validate($request, [
            'name_en' => 'required',
            'name_np' => 'required',
            'number_en' => 'required',
            'number_np' => 'required'
        ]);


        $number = ImpPhone::find($id);
        $number->name_en = $request->name_en;
        $number->name_np = $request->name_np;
        $number->phone_en = $request->number_en;
        $number->phone_np = $request->number_np;
        $number->save();
        return redirect('impPhone');

    }

    public function delete($id)
    {
        $number = ImpPhone::find($id);
        $number->delete();
        return redirect('impPhone');
    }
}
