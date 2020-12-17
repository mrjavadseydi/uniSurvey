<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Account;
use App\Models\AccountStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index(AuthRequest $request){
        if(! $acc = Account::where("UserID",$request->username)->first()){
            toastr()->error('ورود شما ناموفق بود');
            return back();
        }
        $url = "https://lms.birjand.ac.ir/login/token.php?username=".$request->username."&password=".$request->password."&service=moodle_mobile_app";
        $data = Http::get($url)->json();
                if (isset($data['errorcode'])) {
            toastr()->error('ورود شما ناموفق بود');
                return back();
        }

        if ($acc->science_level<3) {
            toastr()->warning('شما مجوز شرکت در رای گیری را ندارید');
            return view('form.error');
        }
        if ($accstatus  = AccountStatus::whereAccountId($acc->id)->first()){
            if ($accstatus->has_vote) {
                toastr()->warning('شما یکبار در رای گیری شرکت کرده اید ');
                return back();
            }
        }
        session(['login_info'=>[
            'expire_at'=>Carbon::now()->addMinutes(30),
            'account'=>$acc
        ]]);
        return redirect(route('survey'));
    }

}
