<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index() {
        $items = DB::select('select * from todo');
        return view('todo.index', ['items' => $items]);
    }
    public function edit(Request $request) {
        for ($i = 0; $i < count($request->id); $i++) {
            $param = [
                'date' => $request->date[$i],
                'todo' => $request->todo[$i],
                'status' => 0,
            ];
            if (empty($request->id[$i])) {
                DB::table('todo')
                    ->insert($param);
            } else {
                DB::table('todo')
                    ->where('id', $request->id[$i])
                    ->update($param);
            }
        }
        return redirect('/todo');
    }
    public function delete(Request $request) {
        DB::table('todo')
            ->where('id', $request->id)
            ->delete();
        return redirect('/todo');
    }
}
