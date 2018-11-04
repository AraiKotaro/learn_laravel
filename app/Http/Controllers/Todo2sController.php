<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Todo2sController extends Controller
{
    public function index()
    {
        return view('todo2s.index');
    }
    public function create()
    {
        return view('todo2s.todo2');
    }
}
