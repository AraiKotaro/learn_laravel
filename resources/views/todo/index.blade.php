@extends('layouts.todoapp')

@section('title', 'Index')
@section('menubar')
    @parent
@endsection

@section('content')
    <form action="/todo" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>日付</th>
                <th>タスク</th>
                <th>削除</th>
            </tr>
            <tbody id="table_body">
                @foreach ($items as $item)
                    <tr>
                        <td>
                            <input type="text" name="date[]"
                                value="{{$item->date}}"
                                class="form-control">
                            <input type="hidden" name="id[]"
                                value="{{$item->id}}"
                                class="form-control">
                        </td>
                        <td>
                            <input type="text" name="todo[]"
                                value="{{$item->todo}}"
                                class="form-control">
                        </td>
                        <td>
                            <input type="button" name="delete"
                                class="form-control"
                                value="削除">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <input type="button" id="add" 
                class="form-control" value="行追加">
        </div>
        <div class="form-group">
            <input type="submit"
                class="form-control" value="更新">
        </div>
    </form>
@endsection

@section('footer')
@endsection
