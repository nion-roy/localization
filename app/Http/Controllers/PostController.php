<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\PostRequest;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
  protected $postRepository;

  public function __construct(PostRepositoryInterface $postRepository)
  {
    $this->postRepository = $postRepository;
  }

  public function index()
  {
    $posts = $this->postRepository->all();
    return view('index', compact('posts'));
  }


  public function create()
  {
    return view('create');
  }


  public function store(PostRequest $request)
  {
    $this->postRepository->create($request->validated());
    return redirect()->back()->with('success', 'Post created successfully.');
  }


  public function edit($id)
  {
    $post = $this->postRepository->findId($id);
    return view('create', compact('post'));
  }


  public function update(PostRequest $request, $id)
  {
    $post = $this->postRepository->findId($id);
    $request->validate([
      'title' => ['required', 'string', 'max:255', Rule::unique('posts')->ignore($post->id)],
      'description' => 'required|string',
    ]);

    $this->postRepository->update($id, $request->validated());
    return redirect()->back()->with('success', 'Post update successfully.');
  }

  public function destroy($id)
  {
    $this->postRepository->delete($id);
    return redirect()->back()->with('success', 'Post delete successfully.');
  }
}
