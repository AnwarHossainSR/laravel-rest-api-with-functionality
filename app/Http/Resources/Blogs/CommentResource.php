<?php

namespace App\Http\Resources\Blogs;

use App\Http\Resources\Users\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'parentId' => $this->parentId,
            'comment' => $this->comment,
            'createdAt' => $this->created_at->addHours(6)->format('F d, Y \a\t g:i a'),
            'replies' => CommentResource::collection($this->replies),
            'author' => new UserResource($this->user),
        ];
    }
}
