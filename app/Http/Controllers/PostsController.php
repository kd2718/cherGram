<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
            "caption"=>"required",
            "image"=>["required", 'image']
        ]);

        $imagepath = request('image')->store("uploads", 'public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(1200, 1200);
        $image->save(); 

        auth()->user()->posts()->create([
            "caption"=>$data["caption"],
            "image"=>$imagepath
        ]);
        //dd($imagepath);
        return redirect("/profile/" . auth()->user()->id);
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(\App\Post $post)
    {
        //$p2 = Post::findOrFail($post);
        //dd(auth()->user());
        //dd($post);

        return view("posts.show", compact('post'));
    }
}
