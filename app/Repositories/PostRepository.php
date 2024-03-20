<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
  public function all()
  {
    return Post::all();
  }

  public function findId($id)
  {
    return Post::findOrFail($id);
  }

  public function create(array $data)
  {
    $post = Post::create($data);
    return $post;
  }


  public function update($id, array $data)
  {
    $post = Post::findOrFail($id);
    $post->update($data);
    return $post;
  }

  public function delete($id)
  {
    return Post::destroy($id);
  }
}
