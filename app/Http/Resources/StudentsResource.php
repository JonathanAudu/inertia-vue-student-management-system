<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'class' => ClassesResource::make($this->whenLoaded('classes')),
            'section' => SectionsResource::make($this->whenLoaded('sections')),
            'created_at' => $this->created_at->toformattedDateString(),
        ];
    }
}
