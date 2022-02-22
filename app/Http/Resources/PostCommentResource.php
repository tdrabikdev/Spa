<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\CommentPost */
class PostCommentResource extends JsonResource
{
    /**
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'parent_id'   => $this->parent_id,
            'author'      => $this->author,
            'body'        => $this->body,
            'created_at'  => $this->created_at->format('d/m/Y H:i:s'),
        ];
    }
}
