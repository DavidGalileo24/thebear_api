<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fullname' => $this->fullname, 
            'nickname' => $this->nickname, 
            'gender' => $this->gender, 
            'date_of_birth' => $this->date_of_birth, 
            'position_job' => $this->position_job, 
            'description' => $this->description,
        ];
    }
}
