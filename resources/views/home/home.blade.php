@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Recent Posts</h1>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12">
        <h2>{{ $post->title }}</h2>
        <p style="font-weight: bold">
            @foreach($post->tags as $tag)
                - {{ $tag->name }} -
            @endforeach
        </p>
        <p>{{ $post->content }}</p>
        <a href="{{ route('home.post', ['id' => $post->id]) }}">Read more...</a>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            {{ $posts->links() }}
        </div>
    </div>
@endsection