<html>
<head>
    <title>@yield('title')</title>
    <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
    <script>
        $(document).on('click', '#add', function(e) {
            var tr_row = '' +
                '<tr>' +
                    '<td>' +
                        '<input type="text" name="date[]">' +
                        '<input type="hidden" name="id[]">' +
                    '</td>' +
                    '<td>' +
                        '<input type="text" name="todo[]">' +
                    '</td>' +
                    '<td>' +
                        '<input type="button" name="delete">' +
                    '</td>' +
                '</tr>';
            $(tr_row).appendTo($('#table_body'));
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
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
        <p class="menutitle">※メニュー</p>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>
