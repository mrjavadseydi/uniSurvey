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

    <title>آمار انتخابات</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.1.0/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <style>
        body {
            font-family: 'Vazir' !important;
            text-align: right;
        }

        #main {
            background: #fff;

        }
    </style>

    <link rel="stylesheet" href="{{asset('plugins/datatables.css')}}">
</head>
<body style="background-image: url('{{asset('19742.jpg')}}')" dir="rtl">
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm text-right">

    </div>
</header>

<br>
<div class="container shadow-lg" id="main">
    <div class="p-2">
        @foreach(\App\Models\Pardis::all() as $l => $d)
            <div class="table-responsive">

            <div class="text-center">
                <p class="alert alert-info" role="alert">
                    {{$d['title']}}
                </p>
            </div>
            <table id="dt-filter-search{{$l}}" class="table text-right table-hover table-striped">
                <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="filter">نام و نام خانوادگی
                    </th>
                    <th class="">تعداد آرا
                    </th>
                    <th class="">مشاهده آرا
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Candidate::where([['pardis_id',$d['id']],['commission',1]])->get() as $i => $n)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$n->account()->first()->FullName}}</td>
                        <td>{{\App\Models\Vote::where([['candidates_id',$n['id']],['pardis_id',$d['id']]])->count()}}</td>
                        <td>
                            <a href="{{route('show',[$n['id'],$d['id']])}}" class="btn btn-sm">
                                <img src="{{$n['photo']}}"  style="max-height: 75px">
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <hr>
        @endforeach
        <div class="table-responsive">
            <div class="text-center">
                <p class="alert alert-info" role="alert">
                    هیئت ممیزه
                </p>
            </div>
            <table id="dt-filter-search" class="table text-right table-hover table-striped">
                <thead>
                <tr>
                    <th class="no-sort">#</th>
                    <th class="filter">نام و نام خانوادگی
                    </th>
                    <th class="">تعداد آرا
                    </th>
                    <th class="">دانشکده
                    </th>
                    <th class="">مشاهده آرا
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Candidate::where([['audit_board',1]])->get() as $i => $n)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$n->account()->first()->FullName}}</td>
                        <td>{{\App\Models\Vote::where([['candidates_id',$n['id']],['pardis_id',0]])->count()}}</td>
                        <td>{{\App\Models\University::whereUnicod($n->account()->first()->FacultyCode)->first()->title}}</td>
                        <td>
                            <a href="{{route('show',[$n['id'],0])}}" class="btn btn-sm" >
                                <img src="{{$n['photo']}}" style="max-height: 75px">
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script
    src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
    integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK"
    crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="{{asset('plugin/datatables.js')}}"></script>
<script>
    @foreach(\App\Models\Pardis::all() as $l => $d)

    $(document).ready(function () {
        var table = $('#dt-filter-search{{$l}}').DataTable({
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]            , "searching": false,"bLengthChange": false,        "paging":   false,
            "order": [[ 2, "desc" ]],
            language: {
                "info": " _START_ تا _END_ از _TOTAL_ ",
                paginate: {
                    next: 'بعدی', // or '→'
                    previous: 'قبلی' // or '←'
                },
                "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "نمایش _MENU_ رکورد",
                "sLoadingRecords": "در حال بارگزاری...",
                "sProcessing": "در حال پردازش...",
                "sSearch": "جستجو:",
                "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                "oPaginate": {
                    "sFirst": "ابتدا",
                    "sLast": "انتها",
                    "sNext": "بعدی",
                    "sPrevious": "قبلی"
                }, "oExport": {
                    "sPrint": "ابتدا",
                },
                "oAria": {
                    "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                    "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                }
            }

        });

    });

    @endforeach

    $(document).ready(function () {
        var table = $('#dt-filter-search').DataTable({
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]            ,
            "searching": false,"bLengthChange": false,        "paging":   false,
            "order": [[ 2, "desc" ]],
            language: {
                "info": " _START_ تا _END_ از _TOTAL_ ",
                paginate: {
                    next: 'بعدی', // or '→'
                    previous: 'قبلی' // or '←'
                },
                "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "نمایش _MENU_ رکورد",
                "sLoadingRecords": "در حال بارگزاری...",
                "sProcessing": "در حال پردازش...",
                "sSearch": "جستجو:",
                "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                "oPaginate": {
                    "sFirst": "ابتدا",
                    "sLast": "انتها",
                    "sNext": "بعدی",
                    "sPrevious": "قبلی"
                }, "oExport": {
                    "sPrint": "ابتدا",
                },
                "oAria": {
                    "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                    "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                }
            }

        });

    });

</script>
</body>
</html>
