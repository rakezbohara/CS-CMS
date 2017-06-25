<?php

namespace App\Http\Controllers;

use Request;
use App\Career;

class AdminCareerController extends Controller
{
    public function career(){
        $career = Career::all();
        return view('admin_home.career.career', compact('career'));
    }

    public function createcareerpost(){
        return view('admin_home.career.create');
    }
    public function savecreatecareerpost(){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $career = new Career();
        $career->title = $input['title'];
        $career->content = $input['ckeditor'];
        $career->deadline = $input['deadline'];
        $career->save();
        return redirect('admincareer');
    }

    public function editcareerpost($careeritem){
        $career = Career::find($careeritem);
        return view('admin_home.career.edit',compact('career'));

    }

    public function saveeditcareerpost($careeritem){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $career = Career::find($careeritem);
        $career->title = $input['title'];
        $career->content = $input['ckeditor'];
        $career->deadline = $input['deadline'];
        $career->save();
        return redirect('admincareer');
    }

    public function deletecareerpost($careeritem){
        $career = Career::find($careeritem);
        $career->delete();
        return redirect('admin');
    }
}
