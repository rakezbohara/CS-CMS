<?php

namespace App\Http\Controllers;

use Request;
use App\Jobapply;
use File;

class AdminJobApplication extends Controller
{
    public function jobs(){
        $jobapply = Jobapply::all();
        return view('admin_home.career',compact('jobapply'));
    }
    public function deletejobs($cvid){
        $jobapply = Jobapply::find($cvid);
        $cvname = $jobapply['cvname'];
        $jobapply->delete();
        File::Delete('uploads/cv/'.$cvname);
        return redirect('suggestionreceived');
    }
}
