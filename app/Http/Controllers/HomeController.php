<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_home.dashboard');
    }

    public function image()
    {
        $images = '';
//        $filename = '';

        foreach (File::allFiles(public_path() . '/asset/img/') as $file)
        {
            $filename = $file->getRelativePathName();

//            $images .= \Collective\Html\HtmlFacade::image('public/asset/img/'.$filename, $filename);
            $images[] = $filename;
        }
//        return $images;
        return view('admin_home.images', compact('images'));
    }
}
