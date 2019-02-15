<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
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
            'username' => $this->username,
            'email' => $this->email,
            'pic' => $this->pic,
            'created_at' => (String) $this->created_at,
            'updated_at' => (String) $this->updated_at,
        ];
        // return parent::toArray($request);
    }
}
