<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TemplateResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'fid' => $this->fid
        ];
    }
}
