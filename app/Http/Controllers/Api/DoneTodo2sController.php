<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Todo2Resource;
use App\Model\Todo2;

class DoneTodo2sController extends Controller
{
    public function update(Todo2 $todo2)
    {
        $todo2->flag();
        return new Todo2Resource($todo2);
    }
}
