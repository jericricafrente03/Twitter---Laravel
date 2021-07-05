@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)
    <div class="row">
        <div class="col-md-6 offset-3 pt-2 pb-2">
          {{-- <a href="/profile/{{$post->user->id}}">
            <img src="/storage/{{ $post->image }}" class="w-100 rounded">
          </a>
              <p class="pt-2 pb-4"><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{ $post->user->name }}</span></a></span> {{ $post->caption}}</p> --}}
            
          <div class="card mb-3">
            <a href="/post/{{$post->user->id}}">
            <img class="card-img-top" src="/storage/{{ $post->image }}" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $post->caption}}</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Created at {{ $post->created_at}}</small></p>
              <div>
                  <div class=""><a href=""><span>View Comments</span></a></div>
              </div>
            </div>
          </div>


        </div>
    


    </div>
  @endforeach
  <div class="row">
    <div class="col-md-12 d-flex justify-content-center">
      {{ $posts->links () }}
    </div>
  </div>

</div>
@endsection
