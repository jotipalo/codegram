@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->profileImage() }}" class="rounded-circle" style="max-width: 100%">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1>{{ $user->username }}</h1>

                    <form action="/profile/u/{{ $user->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


                        <button class="btn btn-primary" style="margin-left: 1em;">Follow</button>
                        
                    </form>
                </div>

                @can ('update', $user->profile)
                    <a href="/p/create" class="btn btn-primary">Add New Post</a>
                @endcan
     
            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div style="padding-right: 4em;"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right: 4em;"><strong>90m</strong> followers</div>
                <div style="padding-right: 4em;"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-md-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="img-responsive" style="padding-right: 2em; padding-bottom: 3em; width: 100%; height: 100%;">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
