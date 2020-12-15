<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index(AuthRequest $request){

        $url = "https://lms.birjand.ac.ir/login/token.php?username=".$request->username."&password=".$request->password."&service=moodle_mobile_app";
        $data = Http::get($url)->json();
        if (isset($data['errorcode'])) {
                notify()->error("","ورود نا موفق","topLeft");
                return back();
        }
        return view('form.survey');
    }
    public  function GetName_scienceLevel($code) {
        switch ($code) {
            case 1: return"مربي آموزشيار";
            case 2: return"مربي";
            case 3: return"استاديار";
            case 4: return"دانشيار";
            case 5: return"استاد";
        }

        return "";
    }
}
