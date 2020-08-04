@extends('layouts.app')

@section('content')

<div class="comtainer">
<form action="/profile/{{ $user->id }} " enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row"><h2>Edit Profile</h2></div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-left pt-4"><h4>Title</h4></label>                          
                    <input id="title" 
                    type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    name="title" value="{{ old('title') ?? $user->profile->title }}" 
                    required autocomplete="title" autofocus>
                        @error('title')
                                <strong>{{ $message }}</strong>
                        @enderror
            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-left pt-4"><h4>Description</h4></label>                          
                    <input id="description" 
                    type="text" 
                    class="form-control @error('description') is-invalid @enderror" 
                    name="description" value="{{ old('description') ?? $user->profile->description }}" 
                    required autocomplete="description" autofocus>
                        @error('description')
                                <strong>{{ $message }}</strong>
                        @enderror
            </div>
            <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label text-md-left pt-4"><h4>URL</h4></label>                          
                    <input id="url" 
                    type="text" 
                    class="form-control @error('url') is-invalid @enderror" 
                    name="url" value="{{ old('url') ?? $user->profile->url }}" 
                    required autocomplete="url" autofocus>
                        @error('url')
                                <strong>{{ $message }}</strong>
                        @enderror
            </div>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-right"><h4>Profile Picture</h4> </label>
                <input type="file" class="form-control-file" id="image" name="image">                          
                @error('image')
                                <strong>{{ $message }}</strong>

                @enderror
            </div>
            <div class="row pt-5 ">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
    </form>

</div>

@endsection
