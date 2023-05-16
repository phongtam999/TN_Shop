<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'address' => $this->address,
            'phone' => $this->phone,
            'image' => $this->image,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'group_id' => $this->group_id,
            'group_name' => $this->group->name ?? '',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
