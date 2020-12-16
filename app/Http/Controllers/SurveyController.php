<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(){
        $user = session('login_info')['account'];
        $heyat = Candidate::whereAuditBoard(1)->get();
        $com = Candidate::where([['university_id',$user['FacultyCode']],['commission',1]])->get();
        return view('form.survey',compact('user','com','heyat'));
    }
}
