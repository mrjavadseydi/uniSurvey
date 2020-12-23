<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountStatus;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $user = session('login_info')['account'];
        $p = pardis($user['FacultyCode']);
        if ($p == 3 || $p == 5) {
            if ($user['FacultyCode'] == 12) {
                $people = Account::where('FacultyCode', $user['FacultyCode'])->get('id');
                $heyat = Candidate::where([['audit_board', 1]])->WhereIn('account_id', $people)->get();
            } else {
                $heyat = Candidate::where([['audit_board', 1], ['pardis_id', $p]])->get();
            }
        } else {
            $people = Account::where('FacultyCode', $user['FacultyCode'])->get('id');
            $heyat = Candidate::where([['audit_board', 1]])->WhereIn('account_id', $people)->get();
        }
        $com = Candidate::where([['pardis_id', $p], ['commission', 1]])->get();
        return view('form.survey', compact('user', 'com', 'heyat'));
    }

    public function save(Request $request)
    {
        foreach ($request->com as $l) {
            Vote::create([
                'account_id' => session('login_info')['account']['id'],
                'candidates_id' => $l,
                'pardis_id' => pardis(session('login_info')['account']['FacultyCode'])
            ]);
        }
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
