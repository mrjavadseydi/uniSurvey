<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe"
        crossorigin="anonymous"/>

    <title>فرم نظر سنجی</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.1.0/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <style>
        body {
            font-family: 'Vazir';
            text-align: right;
        }

        #main {
            background: #fff;

        }

        .active2 .card-body {
            background: #008600;
            color: white;
        }

        .active2 .btn-primary {
            color: black;
            background: white;
        }
        .active3 .card-body {
            background: #008600;
            color: white;
        }

        .active3 .btn-primary {
            color: black;
            background: white;
        }
    </style>
</head>
<body>
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm text-right">

    </div>
</header>

<div class="container shadow" id="main">
    <div class="row py-4 border-primary shadow-lg">
        <div class="col-md-4 col-sm-12 text-center ">
            <h5>
 کد استادی:
                {{$user->ProCode}}
            </h5>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <h5>
                {{\App\Models\University::whereUnicod($user->FacultyCode)->first()->title}}
            </h5>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <h5>
               {{$user->FullName}}
            </h5>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <h4>اسامی کاندید های انتخابات کمیسیون
            {{\App\Models\University::whereUnicod($user->FacultyCode)->first()->title}}
        </h4>
    </div>
    <div class="p-2">
        <form action="{{route('survey')}}" method="post">
            @csrf
            <div class="row">
                @foreach($com as $l=> $c)
                    <div class="col-md-3 col-sm-12" onclick="f1(this)">
                        <label for="test{{$l}}">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{$c->photo}}"
                                     style="width: 225px;height: 224px;"      alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$c->account()->first()->FullName}}</h5>
                                    <p class="card-text">
                                        {{sci_level($c->account()->first()->science_level)}}                                </p>
                                    <span class="btn btn-success">انتخاب این کاندیدا</span>
                                </div>
                            </div>
                        </label>
                        <input type="radio" value="{{$c->id}}" required name="com" style="display: none" id="test{{$l}}">
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="text-center">
                <h4>اسامی کاندید های هیات ممیزه
                </h4>
            </div>
            <div class="row">
                @foreach($heyat as $l=> $c)
                    <div class="col-md-3 col-sm-12" onclick="f2(this)">
                        <label for="te{{$l}}">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{$c->photo}}" style="width: 225px;height: 224px;"      alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$c->account()->first()->FullName}}</h5>
                                    <p class="card-text">
                                        {{sci_level($c->account()->first()->science_level)}}                                </p>
                                    <span class="btn btn-success">انتخاب این کاندیدا</span>
                                </div>
                            </div>
                        </label>
                        <input type="radio" value="{{$c->id}}" required name="heyat" style="display: none" id="te{{$l}}">
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="col-12">
            <input type="submit" class="btn btn-primary w-100"  value="ثبت رای">
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script
    src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
    integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK"
    crossorigin="anonymous"></script>
<script>
    function f1(elem) {
        $('.active2 span').text("انتخاب این کاندیدا");
        $('.active2').removeClass('active2');
        elem.classList.add("active2");
        $('.active2 span').text("انتخاب شده");
    }
    function f2(elem) {
        $('.active3 span').text("انتخاب این کاندیدا");
        $('.active3').removeClass('active3');
        elem.classList.add("active3");
        $('.active3 span').text("انتخاب شده");
    }
</script>
</body>
</html>
