<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use App\Attachement;


class PostController extends Controller {

    public function index () {
        $posts = Post::with('category')->paginate(10);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create () {
        $post = new Post();
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.posts.new', compact('post', 'categories', 'users'));
    }

    public function store (PostRequest $request) {
        Post::create($request->all());
        return $request->image;
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }

    public function edit(Post $post) {
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $attachements=$post->attachements()->get();
        return view('admin.posts.new', compact('post', 'categories', 'users','attachements'));
    }

    public function update(PostRequest $request, Post $post) {
        $post->update($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post destroyed successfully');
    }

}
