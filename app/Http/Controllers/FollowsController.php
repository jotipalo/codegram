<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\Facades\Image;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        return auth()->user()->follwing()->toggle($user->profile);
    }
}
