<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $data)
    {
        if (!empty($data['preview_image'])){
            $data['preview_image'] = Storage::disk()->put('/public/image',$data['preview_image']);

        }
        if (!empty($data['main_image'])){
            $data['main_image'] = Storage::disk()->put('/image',$data['main_image']);
        }
        if(isset($data['tag_ids'])){
            $tags = $data['tag_ids'];
            unset($data['tag_ids']);
            $post = Post::create($data);
            $post->tags()->attach($tags);
        }else{
             Post::create($data);
        }


    }

    public function update(array $data, $post)
    {
        if (!empty($data['preview-image']) || !empty($data['main-image']) ){
            $data['preview-image'] = Storage::disk()->put('/image',$data['preview-image']);
            $data['main-image'] = Storage::disk()->put('/image',$data['main-image']);
        }
        if (isset($data['tag_ids'])) {
            $tags = $data['tag_ids'];
            unset($data['tag_ids']);
            $post->update($data);
            $post->tags()->sync($tags);
        } else {
            $post->update($data);

        }


    }
}
