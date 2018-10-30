@extends('layouts.todoapp')

@section('title', 'ToDo')
@section('menubar')
    @parent
@endsection

@section('content')
    <form action="/todo" method="post" clss="form-horizontal">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-4">日付</div>
                <div class="col-lg-6">タスク</div>
                <div class="col-lg-2">削除</div>
            </div>
            @foreach ($items as $item)
            <div class="row">
                <div class="col-lg-4">  
                    <input type="text" name="date[]"
                        value="{{$item->date}}"
                        class="form-control">
                    <input type="hidden" name="id[]"
                        value="{{$item->id}}"
                        class="form-control">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="todo[]"
                        value="{{$item->todo}}"
                        class="form-control">
                </div>
                <div class="col-lg-2">
                    <input type="button" name="delete"
                        class="form-control"
                        value="削除">
                </div>
            </div>
            @endforeach
            <div class="row" style="margin-top:30px;" id="buttons">
                <div class="col-lg-4">
                    <input type="button" id="add" class="form-control" value="行追加">
                </div>
                <div class="col-lg-4">
                    <input type="submit" class="form-control" value="更新">
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer')
@endsection
