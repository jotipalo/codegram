@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 1em;">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" style="max-width: 50px;">
                    </div>
                    <div>
                        <div><strong>
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a></strong>
                            <a href="#" style="padding-left: 1em;">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span><strong>
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </strong> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
