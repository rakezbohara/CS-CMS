<?php

namespace App\Http\Controllers;

use Request;
use App\Download;

class AdminDownloadController extends Controller
{
    public function downloads(){
        $download = Download::all();
        return view('admin_home.downloads.downloads', compact('download'));
    }

    public function createdownload(){
        return view('admin_home.downloads.create');
    }

    public function savecreatedownload(){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $download = new Download();
        $download->title = $input['title'];
        $download->type = $input['type'];
        $download->desc = $input['ckeditor'];
        $download->filepath = $input['filepath'];
        $download->pubdate = $input['pubdate'];
        $download->save();
        return redirect('admindownloads');
    }

    public function editdownload($downloaditem){
        $download = Download::find($downloaditem);
        return view('admin_home.downloads.edit',compact('download'));

    }

    public function saveeditdownload($downloaditem){
        $input = Request::all();
        $input['ckeditor'] = str_ireplace(array("\r","\n",'\r','\n'),'', $input['ckeditor']);
        $download = Download::find($downloaditem);
        $download->title = $input['title'];
        $download->type = $input['type'];
        $download->desc = $input['ckeditor'];
        $download->filepath = $input['filepath'];
        $download->pubdate = $input['pubdate'];
        $download->save();
        return redirect('admindownloads');
    }

    public function deletedownload($downloaditem){
        $download = Download::find($downloaditem);
        $download->delete();
        return redirect('admindownloads');
    }
}
