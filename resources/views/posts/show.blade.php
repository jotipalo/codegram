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
                        <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle" style="max-width: 50px;">
                    </div>
                    <div>
                        <div><strong>{{ $post->user->username }}</strong></div>
                    </div>
                </div>

                <hr>

                <p><span><strong>{{ $post->user->username }}</strong></span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
