@extends('todo2master')
 
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('todo2_create') }}">ToDo作成</a>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <todo2s></todo2s>
        </div>
    </div>
@endsection
