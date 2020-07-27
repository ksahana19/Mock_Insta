@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/saha.jpeg" width="120%" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h2>{{ $user->username }}</h2>
            <a href="#">New Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>12</strong>  Posts</div>
            <div class="pr-5"><strong>350</strong>  Followers</div>
            <div class="pr-5"><strong>200</strong>  Following</div>
        </div>
        <div class="pt-4 font-weight-bold" >{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>
<div class="row">
    <div class="col-4 pt-5">
        <img src="/images/img1.jpg"  class="w-100">
    </div>
    <div class="col-4 pt-5">
        <img src="/images/img2.jpg" class="w-100">
    </div>
    <div class="col-4 pt-5">
        <img src="/images/img3.jpg" class="w-100">
    </div>



@endsection
