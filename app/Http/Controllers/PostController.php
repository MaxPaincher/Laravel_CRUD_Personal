<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function view()
    {
        return view('elementos/create');
    }
    public function index()
    {
        $posts = Post::paginate(15);
        return view('elementos.index', compact('posts'));
    }

    public function createPost()
    {
        return view('elementos/create');
    }

    public function showPost($post)
    {
        $post = Post::find($post);
        return view('elementos/show', compact('post'));
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('elementos/edit', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'author' => 'required'
        ]);

        Post::whereId($id)->update($validatedData);

        return redirect("home/show/{id?}")->with('success', 'Post updated successfully');
    }

    public function storePost(Request $request)
    {
        $imagePath = $request->file('image')->store('images');
        // dd($imagePath);
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'author' => 'required'
        ]);

        $validatedData['image'] = $imagePath;

        Post::create($validatedData);

    
        return redirect('home')->with('success', 'Post created successfully');
    }
}
