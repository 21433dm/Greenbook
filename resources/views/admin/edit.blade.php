@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                            type="text" 
                            class="form-control" 
                            id="title" 
                            name="title" 
                            value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input 
                            type="text" 
                            class="form-control" 
                            id="content" 
                            name="content" 
                            value="{{ $post->content }}">
                </div>
                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
                {{ csrf_field() }}
                <br>
                <input type="hidden" name="id" value="{{ $postid }}">
                <button type="submit" class="btn btn-success">Post</button>
            </form>
        </div>
    </div>
@endsection