<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo(Category::class,);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }

    public function getMainImage(string $image)
    {
        return $this->attributes[$image];
    }
    public function liked()
    {
        return $this->belongsToMany(User::class,'post_user_likes','post_id','user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
