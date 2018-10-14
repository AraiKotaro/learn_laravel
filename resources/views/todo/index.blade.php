@extends('layouts.todoapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <form action="/todo" method="post">
        {{ csrf_field() }}
        <table>
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
                                value="{{$item->date}}">
                            <input type="hidden" name="id[]"
                                value="{{$item->id}}">
                        </td>
                        <td>
                            <input type="text" name="todo[]"
                                value="{{$item->todo}}">
                        </td>
                        <td>
                            <input type="button" name="delete">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <input type="button" id="add" value="行追加">
        <input type="submit" value="更新">
    </form>
@endsection

@section('footer')
@endsection
