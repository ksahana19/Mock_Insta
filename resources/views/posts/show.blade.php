@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-3 p-4">
            <div>
                <div class="d-flex align-items-center">
                    
                        <img src="{{ $post->user->profile->profileImage() }}" class ="w-100 rounded-circle pr-3" style="max-width:60px;">
                    
                    <div class="pr-3 font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class=" text-dark"> {{ $post->user->username }}</span>
                        </a>
                    </div>
                </div>
                <hr>
                <p><span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class=" text-dark"> {{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption}}</p>
            </div>
        </div>
    </div>

</div>



@endsection
