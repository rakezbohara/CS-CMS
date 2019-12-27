<?php

namespace App\Http\Controllers;

use App;
use App\ImpPhone;
use Request;
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
use App\Jobapply;
use App\WasteRoutine;
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

        $blogpost = blogpost::orderBy('id', 'desc')->take(2)->get();
        $orghead = Staff::find(1);
        $orgtechhead = Staff::find(2);
        $marquee = Marquee::all();

        $homecontent = HomeContent::find(1);
      
        $wasteroutine = WasteRoutine::all();
        $implinks = Implink::all();
        $impPhones = ImpPhone::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();

        return view('frontend.index',compact('impPhones','slideshow','blogpost','orghead','orgtechhead','marquee','homecontent','implinks','download','wasteroutine'));
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
        $impPhones = ImpPhone::all();
        return view('frontend.aboutus',compact('impPhones','implinks','download','aboutus','blogpost'));
    }
    public function gallery(){
        $images = array();
        foreach (File::allFiles(public_path() . '/ckfinder/userfiles/images/gallery/') as $file)
        {
            $filename = $file->getRelativePathName();
            array_push($images, $filename);
        }
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        $impPhones = ImpPhone::all();
        return view('frontend.gallery',compact('impPhones','implinks','download','aboutus','images'));
    }
    public function blog(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        $blogpost = blogpost::orderBy('id', 'DESC')->paginate(8);
        $impPhones = ImpPhone::all();
        return view('frontend.blog',compact('impPhones','implinks','download','aboutus','blogpost'));
    }

    public function career(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $aboutus = Aboutus::find(1);
        $career = Career::all();
        $impPhones = ImpPhone::all();
        return view('frontend.career',compact('impPhones','implinks','download','aboutus','career'));
    }
    public function savecareer(){
        $input = Request::all();
        if(array_key_exists('cvfile',$input)){
            $cvfile = $input['cvfile'];
            $extension = $cvfile->getClientOriginalExtension();
            $filename = uniqid().'.'.$extension;
        }
        $jobapply = new Jobapply();
        $jobapply->name = $input['name'];
        $jobapply->email = $input['email'];
        $jobapply->category = $input['category'];
        $jobapply->phone = $input['phone'];
        $jobapply->message = $input['message'];
        if(array_key_exists('cvfile',$input)){
            $jobapply->cvname = $filename;
            $cvfile->move('uploads/cv',$filename);
        }
        $jobapply->save();
        return redirect('suggestion');
    }
    public function downloads(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $downloads = Download::where('type','Electronic Help')->paginate(8);
        $impPhones = ImpPhone::all();
        return view('frontend.downloads',compact('impPhones','implinks','download','blogpost','downloads'));
    }
    public function budget(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $downloads = Download::where('type','Budget')->paginate(8);
        $impPhones = ImpPhone::all();
        return view('frontend.budget',compact('impPhones','implinks','download','blogpost','downloads'));
    }
    public function plans(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $downloads = Download::where('type','Yojana')->paginate(8);
        $impPhones = ImpPhone::all();
        return view('frontend.plan',compact('impPhones','implinks','download','blogpost','downloads'));
    }
    public function reports(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $downloads = Download::where('type','Pratibedan')->paginate(8);
        $impPhones = ImpPhone::all();
        return view('frontend.reports',compact('impPhones','implinks','download','blogpost','downloads'));
    }
    public function blogitem($postid){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $postitem = blogpost::find($postid);
        $impPhones = ImpPhone::all();
        return view('frontend.blogitem',compact('impPhones','implinks','download','blogpost','postitem'));
    }
    public function orgchart(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $blogpost = blogpost::orderBy('id', 'desc')->take(4)->get();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $impPhones = ImpPhone::all();
        return view('frontend.orgchart',compact('impPhones','implinks','download','blogpost'));
    }
    public function staff(){
        App::setLocale(Session::get('applocale'));
        $implinks = Implink::all();
        $staffs = Staff::all();
        $download = Download::orderBy('id', 'desc')->take(4)->get();
        $impPhones = ImpPhone::all();
        return view('frontend.staff',compact('impPhones','implinks','download','staffs'));
    }
}
