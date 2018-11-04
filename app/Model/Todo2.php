<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todo2 extends Model
{
    protected $fillable = [
        'todo_date',
        'contents',
        'done',
        'updated_at',
    ];
    public function scopeIgnoreFlagged($query)
    {
        return $query->where('done', null);
    }
    public function flag()
    {
        return $this->update(['done' => Carbon::now()]);
    }
}
