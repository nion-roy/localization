<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'title_bn', 'description', 'description_bn'];

  // protected $guarded = [];

  public static function createPost($requestData)
  {
    $post = new Post();
    $post->title = $requestData->title;
    $post->title_bn = $requestData->title_bn;
    $post->description = $requestData->description;
    $post->description_bn = $requestData->description_bn;
    $post->save();
    return $post;
  }

  public static function updatePost($id, $requestData)
  {
    $post = Post::findOrFail($id);
    $post->title = $requestData->title;
    $post->title_bn = $requestData->title_bn;
    $post->description = $requestData->description;
    $post->description_bn = $requestData->description_bn;
    $post->save();
    return $post;
  }

  public static function deletePost($id)
  {
    $post = Post::findOrFail($id)->delete();
    return $post;
  }
}
