@extends('Layouts.todoapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    
    @each('components.todoitem', $data, 'item')
@endsection

@section('footer')
@endsection
