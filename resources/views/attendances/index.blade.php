@extends('master')
 
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('attend') }}">出席登録画面へ</a>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <attendances></attendances> <!-- *1 -->
        </div>
    </div>
@endsection
