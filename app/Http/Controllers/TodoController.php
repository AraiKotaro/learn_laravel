<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function index() {
        $data = [
            ['date'=>'10/13', 'todo'=>'歯磨き粉を買う'],
            ['date'=>'10/14', 'todo'=>'洗剤を買う'],
            ['date'=>'10/15', 'todo'=>'髪を切る']
        ];
        return view('todo.index', ['data'=>$data]);
    }
    public function post(Request $request) {
        return view('todo.index', ['msg'=>$request->msg]);
    }
}
