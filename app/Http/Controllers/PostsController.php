<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //$uid = Auth::user()->id;
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagepath = (request('image')->store('uploads', 'public'));

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(324, 324);
        $image->save();


        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagepath,
        ]);

        return redirect('/profile/' . auth()->user()->id);

    }

    public function show(\App\Models\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
