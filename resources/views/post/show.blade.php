@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-7">
            <img src="/storage/{{ $post->image }}" class="w-100 rounded" >
        </div>
        <div class="col-md-5">
          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="{{ $post->user->avatar}}" class="rounded-circle w-100" style="max-width: 40px;">
            </div>
            <div>
              <h3 class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{ $post->user->name }}</span></a>
              </h3>
            </div>
          </div>
          <hr>          
            <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{ $post->user->name }}</span></a></span> {{ $post->caption}}</p>

            @comments(['model' => $post])
        </div>
  </div>
</div>
@endsection
