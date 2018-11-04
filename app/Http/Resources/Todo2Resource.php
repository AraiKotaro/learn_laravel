<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Todo2Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'todo_date' => $this->todo_date,
            'contents' => $this->contents,
            'date' => $this->created_at->diffForHumans(),
        ];
    }
}
