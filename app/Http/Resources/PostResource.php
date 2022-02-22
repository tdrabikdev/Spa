<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Post */
class PostResource extends JsonResource
{
    /**
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'slug'       => $this->slug,
            'body'       => $this->body,
            'created_at' => $this->created_at,
            'comments'=> \DB::table('comment_posts')->select('post_id','parent_id','author','body')->where('post_id',$this->id)->get()
        ];
    }
}
