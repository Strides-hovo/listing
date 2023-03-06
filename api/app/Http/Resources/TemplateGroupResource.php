<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TemplateGroupResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'templates' => TemplateResource::collection($this->whenLoaded('templates'))
        ];
    }
}
