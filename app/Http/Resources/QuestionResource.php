<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
          'Title' => $this->title,
            'Body' => $this->body,
            'Slug' => $this->slug,
            'User Name' => $this->user->name,
            'Category' => $this->category->name
        ];
    }
}
