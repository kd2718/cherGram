@extends('layouts.app') @section('content') <div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-8 offset-2">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-8 offset-2">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">
                        </div>
                        <div>
                            <div class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark"> {{$post->user->username}}</span> </a> <a href="#" class="pl-3">Follow</a> </div>
                        </div>
                    </div>
                </div>
                <p><span class="font-weight-bold"> <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></span> {{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection