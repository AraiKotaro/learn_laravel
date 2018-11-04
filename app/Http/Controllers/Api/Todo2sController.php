<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Todo2;
use App\Http\Resources\Todo2Resource;

class Todo2sController extends Controller
{
    public function index()
    {
        $todo2s = Todo2::latest()
            ->ignoreFlagged()
            ->paginate(3);
        return Todo2Resource::collection($todo2s);
    }
    public function show(Todo2 $todo2)
    {
        return new Todo2Resource($todo2);
    }
    public function store(Request $request)
    {
        $todo2 = $this->validate($request, [
            'todo_date' => 'present|date',
            'contents' => 'present',
        ]);
        $todo2 = Todo2::create($todo2);
        return new Todo2Resource($todo2);
    }
}
