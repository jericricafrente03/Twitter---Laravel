@extends('layouts.app')

@section('content')
<div class="container">
   <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="col-md-8 offset-md-2">
           <div class="row">
               <h1>Edit Profile</h1>
           </div>
           <div class="form-group row">
               <label for="caption">Title</label>
               <input type="text" name="title" id="title" value="{{ $user->profile->title }}" class="form-control @error('title') is-invalid @enderror"
               value="{{ old('title')}}" autocomplete="caption" autofocus>
               @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> 
               @enderror
           </div>

           <div class="form-group row">
               <label for="caption">Description</label>
               <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" autocomplete="caption" autofocus>{{ old('description') ?? $user->profile->description }}</textarea>
               @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> 
               @enderror
           </div>

           <div class="form-group row">
               <label for="caption">URL/Website</label>
               <input type="text" name="url" id="url" value="{{ $user->profile->url }}" class="form-control @error('url') is-invalid @enderror"
               value="{{ old('url')}}" autocomplete="caption" autofocus>
               @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> 
               @enderror
           </div>

           <div class="row">
               <label for="image">Profile Image</label>
               <input type="file" name="image" id="image" class="form-control-file">
               @error('image')
                        <strong>{{ $message }}</strong>                
               @enderror
           </div>
           <div class="row pt-4">
                <button type="submit" class="btn btn-primary">Update Profile</button>
           </div>
       </div>
   </form>
    
</div>
@endsection
