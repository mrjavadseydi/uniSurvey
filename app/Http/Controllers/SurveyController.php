<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(){
        $user = session('login_info')['account'];
        $heyat = Candidate::whereAuditBoard(1)->get();
        $p = pardis($user['FacultyCode']);
        $com = Candidate::where([['pardis_id',$p],['commission',1]])->get();
        return view('form.survey',compact('user','com','heyat'));
    }
}
