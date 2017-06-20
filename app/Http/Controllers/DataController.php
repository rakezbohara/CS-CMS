<?php

namespace App\Http\Controllers;
use Request;

class DataController extends Controller
{
    public function store(){
        $input = Request::all();
        $ckdata = $input['ckeditor'];
        $ckdata = str_ireplace(array("\r","\n",'\r','\n'),'', $ckdata);
        dd($ckdata);
    }
}
