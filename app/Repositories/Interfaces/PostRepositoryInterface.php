<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface
{

  public function all();
  public function findId($id);
  public function create(array $data);
  public function update($id, array $data);
  public function delete($id);
}
