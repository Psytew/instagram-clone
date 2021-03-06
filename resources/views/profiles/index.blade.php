@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" style="height: 200px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>
                    <follow-button userid="{{ $user->id }}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post!</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{$user->profile->title ?? ""}}</strong></div>
            <div>{{$user->profile->description ?? ""}}</div>
            <div><a href="freecodecamp.org"><strong>{{$user->profile->url ?? ""}}</strong></a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100 pt-4">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
