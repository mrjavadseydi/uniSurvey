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
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.1.0/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <title>ورود به حساب کاربری</title>
    @toastr_css
    <style>
        html{
            font-family: 'Vazir' !important;
            background-color: #3c3838;
        }

        body{
            background-color: transparent;
        }

        #log-in-form{
            border-radius: 5px;
            margin: 130px auto 0;
            padding: 10px;
            color: white;
            min-height: 320px;
            max-width: 800px;
            background-image: url("https://dl.dropboxusercontent.com/s/x4tn6701lpu2oeh/notebook-chill.jpg?dl=0");
            background-size: cover;
            direction: rtl;
        }

        #log-in-form .heading{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 70px;
        }

        #log-in-form .form-group{
            float: right;
            width: 28%;
            margin-right: 40px;
        }

        #log-in-form .form-control{
            padding: 15px 25px;
            height: auto;
        }

        #log-in-form .form-group-btn{
            width: 15%;
            margin-right: 70px;
        }

        #log-in-form .btn{
            padding: 13px 32px;
        }

        #log-in-form .checkbox{
            float: right;
            margin: 15px 40px 50px 0px;
        }


        @media screen and (max-width: 800px){
            #log-in-form{
                margin: 0px;
            }

            #log-in-form .form-group{
                width: 60%;
                float: none;
                margin: 10px auto;
            }

            #log-in-form .form-group-btn{
                margin-top: 30px;
            }

            #log-in-form .btn{
                width: 100%;
            }

            #log-in-form .checkbox{
                width: 60%;
                float: none;
                margin: 15px auto 50px auto;
            }
        }

        @media screen and (max-width: 600px){
            #log-in-form .form-group,
            #log-in-form .checkbox{
                width: 90%;
            }
        }
        input{
            font-family: Vazir;
            border-radius: 12px;
        }

    </style>

</head>
<body>
<div class="container" id="log-in-form">
    <div class="heading">
        <h3 style="font-family: Vazir">جهت شرکت در انتخابات کمسیون تخصصیو هیئت ممیزه بانام کاربری و کلمه عبور سامانه پویا خود را وارد کنید</h3>
    </div>
    <form action="{{route('login2')}}" method="post">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" id="username" required name="username" placeholder="نام کاربری سامانه پویا">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" required id="pwd" placeholder="کلمه عبور سامانه پویا">
        </div>
        <div class="form-group form-group-btn">
            <button type="submit" class="btn btn-success  " style="font-family: Vazir;border-radius: 5px">ورود</button>
        </div>
        <div class="clearfix"></div>

        <div class="clearfix"></div>
    </form>
</div>
@jquery
@toastr_js
@toastr_render
</body>
</html>
