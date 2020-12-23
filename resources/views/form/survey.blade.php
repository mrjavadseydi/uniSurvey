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
    @toastr_css

    <style>
        body {
            font-family: 'Vazir' !important;
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
    <script>
        l = 0;
        m = 0;
    </script>
</head>
<body style="background-image: url('{{asset('19742.jpg')}}')">
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm text-right">

    </div>
</header>

<div class="container ">
    <div class="row p-3 shadow" style=" background: white">
        <div class="col-md-4 col-sm-12 text-center ">
            <h6>
                کد استادی:
                {{$user->ProCode}}
            </h6>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <h6>
                {{\App\Models\University::whereUnicod($user->FacultyCode)->first()->title}}

            </h6>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <h6>
                {{$user->FullName}}
            </h6>
        </div>
    </div>
</div>
<br>
<div class="container shadow-lg" id="main">

    <div class="p-2">
        <form action="{{route('survey')}}" method="post" id="form">
            <br>
            <div class="text-center">
                <h4>
                    لیست کاندیدا های هيئت ممیزه
                </h4>
            </div>
            <div class="row">
                @foreach($heyat as $l=> $c)
                    <div class="col-md-2 col-sm-6 text-center">
                        <label onclick="f2(this); m +=1;">
                            <div class="card" style="min-height: 400px;">
                                <img class="card-img-top" src="{{$c->photo}}"
                                     alt="Card image cap">
                                <div class="card-body" style="font-size: 1em;">
                                    <h6 class="card-title">
                                        دکتر
                                        {{$c->account()->first()->FullName}}
                                    </h6>
                                    <p class="card-text" style="font-size: 12px">
                                        {{sci_level($c->account()->first()->science_level)}}
                                        <br>
                                        {{\App\Models\University::whereUnicod($c->account()->first()->FacultyCode)->first()->title}}
                                    </p>
                                </div>
                                <span class="btn btn-success" style="font-size: 14px">انتخاب این کاندیدا</span>

                            </div>
                        </label>
                        <input type="checkbox" value="{{$c->id}}" required name="heyat[]"
                               style="display: none"
                        >
                    </div>
                    @endforeach
            </div>
            <hr>
            <div class="text-center pt-2">
                <h4>لیست کاندیدا های کمیسون تخصصی
                    {{\App\Models\Pardis::whereId(pardis($user->FacultyCode))->first()->title}}

                </h4>
            </div>
            @csrf
            <div class="row">
                @foreach($com as $l=> $c)
                    @if ($user->FacultyCode != 11 && $c->FacultyCode == 11)
                        @break
                    @endif
                    <div class="col-md-2 col-sm-6 text-center">
                        <label class="" onclick="f1(this); l =1;">
                            <div class="card" style="min-height: 400px;">
                                <img class="card-img-top" src="{{$c->photo}}"
                                     alt="Card image cap">
                                <div class="card-body" style="font-size: 1em;">
                                    <h6 class="card-title">
                                        دکتر
                                        {{$c->account()->first()->FullName}}
                                    </h6>
                                    <p class="card-text" style="font-size: 12px">
                                        {{sci_level($c->account()->first()->science_level)}}
                                        <br>
                                        {{\App\Models\University::whereUnicod($c->account()->first()->FacultyCode)->first()->title}}
                                    </p>
                                </div>
                                <span class="btn btn-success" style="font-size: 14px">انتخاب این کاندیدا</span>

                            </div>
                        </label>
                        <input type="checkbox" value="{{$c->id}}" required name="com[]"
                               style="display: none"
                               id="test{{$l}}">
                    </div>
                @endforeach
            </div>
        </form>
    </div>
</div>
<div style="z-index: 999;position: fixed;width: 100%; top: 93%;height: 150px">
    <div class="col-12">
        <input type="button" class="btn btn-primary w-100" onclick="f3(l,m)" value="ثبت رای">
    </div>
</div>
@jquery
@toastr_js
@toastr_render
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script
    src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
    integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK"
    crossorigin="anonymous"></script>
<script>
    function f1(elem) {
        if (elem.classList.contains('active2')) {
            elem.childNodes[1].childNodes[5].innerText = "انتخاب این کاندیدا";
            elem.classList.remove('active2');
            elem.nextElementSibling.checked = false;
        } else {
            if (document.getElementsByClassName('active2').length > 5) {
                toastr.warning('حداکثر 6 کاندیدا را میتوان از کاندیدهای کمیسیون انتخاب کرد', '', []);
                elem.nextElementSibling.checked = false;
            } else {
                elem.classList.add("active2");
                $('.active2 span').text("انتخاب شده");
                elem.nextElementSibling.checked = true;
            }
        }
    }

    function f2(elem) {
        if (elem.classList.contains('active3')) {
            elem.childNodes[1].childNodes[5].innerText = "انتخاب این کاندیدا";
            elem.classList.remove('active3');
            elem.nextElementSibling.checked = false;
        } else {
            if (document.getElementsByClassName('active3').length
                >
                {{allow_count($user->FacultyCode)-1}}
            ) {
                toastr.warning('حداکثر {{allow_count($user->FacultyCode)}} کاندیدا را میتوان از کاندید های هیئت ممیزه انتخاب کرد', '', []);
                elem.nextElementSibling.checked = false;
            } else {
                elem.classList.add("active3");
                $('.active3 span').text("انتخاب شده");
                elem.nextElementSibling.checked = true;
            }
        }
    }

    toastr.options = {
        "closeButton": true,
        "closeClass": "toast-close-button",
        "closeDuration": 300,
        "closeEasing": "swing",
        "closeHtml": "<button><i class=\"icon-off\"><\/i><\/button>",
        "closeMethod": "fadeOut",
        "closeOnHover": true,
        "containerId": "toast-container",
        "debug": false,
        "escapeHtml": false,
        "extendedTimeOut": 10000,
        "hideDuration": 1000,
        "hideEasing": "linear",
        "hideMethod": "fadeOut",
        "iconClass": "toast-info",
        "iconClasses": {
            "error": "toast-error",
            "info": "toast-info",
            "success": "toast-success",
            "warning": "toast-warning"
        },
        "messageClass": "toast-message",
        "newestOnTop": false,
        "onHidden": null,
        "onShown": null,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "progressBar": true,
        "progressClass": "toast-progress",
        "rtl": true,
        "showDuration": 300,
        "showEasing": "swing",
        "showMethod": "fadeIn",
        "tapToDismiss": true,
        "target": "body",
        "timeOut": 5000,
        "titleClass": "toast-title",
        "toastClass": "toast"
    };

    function f3(l, m) {
        if (l == 1 && m >= 1) {
            $('#form').submit();
        } else {
            toastr.warning('باید حداقل 1 کاندید از هر بخش را انتخاب کنید', '', []);
        }
    }
</script>
</body>
</html>
