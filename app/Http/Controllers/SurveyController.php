<?php

namespace App\Http\Controllers;

use App\Models\AccountStatus;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $user = session('login_info')['account'];
        $heyat = Candidate::whereAuditBoard(1)->get();
        $p = pardis($user['FacultyCode']);
        $com = Candidate::where([['pardis_id', $p], ['commission', 1]])->get();
        return view('form.survey', compact('user', 'com', 'heyat'));
    }

    public function save(Request $request)
    {
        Vote::create([
            'account_id' => session('login_info')['account']['id'],
            'candidates_id' => $request->com,
            'pardis_id' => pardis(session('login_info')['account']['FacultyCode'])
        ]);
        foreach ($request->heyat as $l) {
            Vote::create([
                'account_id' => session('login_info')['account']['id'],
                'candidates_id' => $l,
                'pardis_id' => 0
            ]);
        }
        AccountStatus::create([
            'account_id' => session('login_info')['account']['id'],
            'has_vote' => true
        ]);
        toastr()->success("اطلاعات با موفقیت ذخیره شد");
        session()->flush();
        return view('form.submit');
    }
}
