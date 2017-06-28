<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\Session;
use App\Slideshow;
use App\blogpost;
use App\Staff;
use App\Marquee;
use App\HomeContent;
use App\Implink;
use App\Download;
use App\Aboutus;
use App\Career;
use Illuminate\Support\Facades\File;
class FrontEndController extends Controller
{
    public function index(){
        if(Session::get('applocale')=='en'){
            Session::set('applocale', 'en');
            App::setLocale('en');
        }else{
            Session::set('applocale', 'np');
            App::setLocale('np');
        }
        $slideshow = Slideshow::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $orghead = Staff::find(1);
        $orgtechhead = Staff::find(2);
        $marquee = Marquee::all();
        $homecontent = HomeContent::find(1);
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();

        return view('frontend.index',compact('slideshow','blogpost','orghead','orgtechhead','marquee','homecontent','implinks','download'));
    }
    public function en()
    {
        App::setLocale('en');
        Session::set('applocale', 'en');
        return redirect('/');
    }
    public function np()
    {
        App::setLocale('np');
        Session::set('applocale', 'np');
        return redirect('/');
    }
    public function aboutus(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        return view('frontend.aboutus',compact('implinks','download','aboutus','blogpost'));
    }
    public function gallery(){
        $images = '';
        foreach (File::allFiles(public_path() . '/ckfinder/userfiles/images/gallery/') as $file)
        {
            $filename = $file->getRelativePathName();
            $images[] = $filename;
        }
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        return view('frontend.gallery',compact('implinks','download','aboutus','images'));
    }
    public function blog(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        $blogpost = blogpost::paginate(8);
        return view('frontend.blog',compact('implinks','download','aboutus','blogpost'));
    }

    public function career(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        $career = Career::all();
        return view('frontend.career',compact('implinks','download','aboutus','career'));
    }
    public function downloads(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $downloads = Download::paginate(8);
        return view('frontend.downloads',compact('implinks','download','blogpost','downloads'));
    }
    public function blogitem($postid){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $postitem = blogpost::find($postid);
        return view('frontend.blogitem',compact('implinks','download','blogpost','postitem'));
    }
}
