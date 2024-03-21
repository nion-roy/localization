<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
  public function all()
  {
    return Post::latest('id')->get();
  }

  public function findId($id)
  {
    return Post::findOrFail($id);
  }

  public function create(array $data)
  {
    return Post::createPost((object)$data);
  }

  public function update($id, array $data)
  {
    return Post::updatePost($id, (object) $data);
  }

  public function delete($id)
  {
    return Post::deletePost($id);
  }
}
