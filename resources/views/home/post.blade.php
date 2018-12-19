@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>{{ $post->title }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ count($post->likes) }} Likes |
            <a href="{{ route('home.post.like', ['id' => $post->id]) }}">Like</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection