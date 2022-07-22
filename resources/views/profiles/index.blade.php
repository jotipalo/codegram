@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{asset('img_symlink_1/bigbrologo.png')}}" class="rounded-circle" style="max-width: 100%">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#" class="btn btn-primary">Add New Post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right: 4em;"><strong>153</strong> posts</div>
                <div style="padding-right: 4em;"><strong>90m</strong> followers</div>
                <div style="padding-right: 4em;"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4" style="height: 267px; width: 267px;">
            <img src="{{asset('img_symlink_1/bigbrologo.png')}}" class="w-100">
        </div>
        <div class="col-4" style="height: 267px; width: 267px;">
            <img src="{{asset('img_symlink_1/bigbrologo.png')}}" class="w-100">
        </div>
        <div class="col-4" style="height: 267px; width: 267px;">
            <img src="{{asset('img_symlink_1/bigbrologo.png')}}" class="w-100">
        </div>

    </div>
</div>
@endsection
