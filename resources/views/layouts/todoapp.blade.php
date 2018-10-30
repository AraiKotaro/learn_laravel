<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.ja.js') }}"></script>
    <script>
        $(function(){
            $('input[name="date[]"]').datepicker({language: 'ja'});
        });
        $(document).on('click', '#add', function(e) {
            var row = '' +
            '<div class="row">' +
                '<div class="col-lg-4">' +
                    '<input type="text" name="date[]"' +
                        'class="form-control">' +
                    '<input type="hidden" name="id[]"' +
                        'class="form-control">' +
                '</div>' +
                '<div class="col-lg-6">' +
                    '<input type="text" name="todo[]"' +
                        'class="form-control">' +
                '</div>' +
                '<div class="col-lg-2">' +
                    '<input type="button" name="delete"' +
                        'class="form-control"' +
                        'value="削除">' +
                '</div>' +
            '</div>';
            $('#buttons').before(row);
            $('input[name="date[]"]').datepicker({language: 'ja'});
        });
        $(document).on('click', 'input[name="delete"]', function(e) {
            var delete_id = $(this).parent().parent().find('input[name="id[]"]').val();
            //alert(delete_id + $('input[name="_token"]').val());
            $.post(
                'delete',
                {
                    '_token' : $('input[name="_token"]').val(),
                    'id' : delete_id,
                }
            );
            location.reload();
        });
    </script>
    <style>
    body {font-size:16pt; color:#999; margin:5px; }
    h1 {font-size:50pt; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; leter-spacing:-4pt; }
    ul {font-size:12pt;}
    hr {margin:25px 100px; border-top:1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin:0px;}
    .content {margin:10px;}
    .footer {text-align:right; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc; }
    </style>
</head>
<body>
    <div class="container">
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            <p class="menutitle">ToDo入力</p>
        </ul>
        <div class="content">
        @yield('content')
        </div>
        <div class="footer">
        @yield('footer')
        </div>
    </div>
</body>
</html>
