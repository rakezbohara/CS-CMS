<?php

namespace App\Http\Controllers;

use Request;
use App\Aboutus;

class AdminAboutUsController extends Controller
{
    public function aboutus(){
        $aboutus = Aboutus::find(1);
        return view('admin_home.aboutus',compact('aboutus'));
    }
    public function saveaboutus(){
        $input = Request::all();
        $input['ckeditor1'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor1']);
        $input['ckeditor2'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor2']);

        $aboutus = Aboutus::find(1);
        $aboutus->content_en = $input['ckeditor1'];
        $aboutus->content_np = $input['ckeditor2'];
        $aboutus->save();

        return redirect('adminaboutus');
    }
}
