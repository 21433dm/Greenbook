@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <br>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <h4>{{ $post->title }}</h4> 
            <a href="{{ route('admin.edit', ['id' => $post->id]) }}">Edit</a>
            <a href="{{ route('admin.delete', ['id' => $post->id]) }}">Delete</a>
        </div>
    </div>
    <br>
    @endforeach
@endsection