<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

use function Pest\Laravel\post;

class postController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("id", "desc")->paginate(10);
        return view('posts.index', compact("posts"));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request, Post $post)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->slug = $request->slug;
        // $post->category = $request->category;
        // $post->save();

        // $request->validate([
        //     "title" => "required | min:3",
        //     "content" => "required",
        //     "slug" => "required|unique:posts,slug,{$post->id},id",
        //     "category" => ["required", "min:3", "max:10"],
        // ],[],[]);


        $post =  Post::create($request->all());

        Mail::to("juaneswilli@hotmail.com")->send(new PostCreateMail($post));

        return redirect()->route("posts.index");
    }


    public function show(Post $post)
    {
        // $post = Post::find($post);

        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        // $post = Post::find($post);
        return view("posts.edit", compact("post"));
    }
    public function update(Request $request, Post $post)
    {
        // $post = Post::find($post);
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->category = $request->category;
        // $post->slug = $request->slug;
        // $post->save();

        $post->update($request->all());

        return redirect()->route("posts.show", $post);
    }

    public function destroy(Post $post)
    {
        // $post = Post::find($post);
        $post->delete();
        return redirect()->route("posts.index");
    }
}
