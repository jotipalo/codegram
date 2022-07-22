<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $uid = Auth::user()->id;
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        print_r(request());

        Post::create($data);

        dd(request()->all());
    }
}
