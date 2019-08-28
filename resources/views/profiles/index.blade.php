@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" class="rounded-circle" style="height: 200px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
            <a href="/p/create">Add New Post!</a></div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="freecodecamp.org"><strong>{{$user->profile->url}}</strong></a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{$post->image}}" class="w-100 pt-4">
        </div>
        @endforeach
    </div>
</div>
@endsection
