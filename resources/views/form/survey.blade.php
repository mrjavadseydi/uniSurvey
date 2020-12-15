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
        crossorigin="anonymous" />

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
            background: #007bff;
            color: white;
        }

        .active2 .btn-primary {
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
    <div class="row py-4 border-primary">
        <div class="col-md-4 col-sm-12">
            <span>
                استادیار
            </span>
        </div>
        <div class="col-md-4 col-sm-12">
            <span>
                دانشکده مهندسی برق و کامپیوتر
            </span>
        </div>
        <div class="col-md-4 col-sm-12">
            <span>
               محمدجوادصیدی
            </span>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <h4>اسامی کاندید های انتخابات کمیسیون دانشگاه </h4>
    </div>
    <div class="p-2">
        <form action="#" class="row">
            <div class="col-md-3 col-sm-12" onclick="f1(this)">
                <label for="test1">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://monitoring.birjand.ac.ir/dist/img/avatar3.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کاندیدای 3</h5>
                            <p class="card-text">توضیحات این کاندیدا</p>
                            <span class="btn btn-primary">انتخاب این کاندیدا</span>
                        </div>
                    </div>
                </label>
                <input type="radio" name="test" style="display: none" id="test1">
            </div>
            <div class=" col-md-3 col-sm-12" onclick="f1(this)">
                <label for="test2">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://monitoring.birjand.ac.ir/dist/img/avatar3.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کاندیدای 2</h5>
                            <p class="card-text">توضیحات این کاندیدا</p>
                            <span class="btn btn-primary">انتخاب این کاندیدا</span>
                        </div>
                    </div>
                </label>
                <input type="radio" name="test" style="display: none" id="test2">
            </div>
            <div class=" col-md-3 col-sm-12" onclick="f1(this)">
                <label for="test3">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://monitoring.birjand.ac.ir/dist/img/avatar3.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کاندیدای 1</h5>
                            <p class="card-text">توضیحات این کاندیدا</p>
                            <span class="btn btn-primary">انتخاب این کاندیدا</span>
                        </div>
                    </div>
                </label>
                <input type="radio" name="test" style="display: none" id="test3">
            </div>
            <div class=" col-md-3 col-sm-12" onclick="f1(this)">
                <label for="test0">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://monitoring.birjand.ac.ir/dist/img/avatar3.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کاندیدای 0</h5>
                            <p class="card-text">توضیحات این کاندیدا</p>
                            <span class="btn btn-primary">انتخاب این کاندیدا</span>
                        </div>
                    </div>
                </label>
                <input type="radio" name="test" style="display: none" id="test0">
            </div>
            <div class=" col-md-3 col-sm-12" onclick="f1(this)">
                <label for="test30">
                    <div class="card" style="">
                        <img class="card-img-top" src="http://monitoring.birjand.ac.ir/dist/img/avatar3.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کاندیدای 0</h5>
                            <p class="card-text">توضیحات این کاندیدا</p>
                            <span class="btn btn-primary">انتخاب این کاندیدا</span>
                        </div>
                    </div>
                </label>
                <input type="radio" name="test" style="display: none" id="test30">
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

</script>
</body>
</html>
