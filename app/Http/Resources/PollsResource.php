<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PollsResource extends Resource
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
            'question' => $this->question,
            'created_by' => $this->created_by,
            'created_at' => (String) $this->created_at->diffForHumans(),
            'updated_at' => (String) $this->updated_at->diffForHumans(),
        ];
    }
}
