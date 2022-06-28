@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
<!-- @each('posts.partials.post', $posts, 'post') -->
@forelse($posts as $key => $post) 
    @include('posts.partials.post', [])
    <div>{{ $key }}.{{ $post['title']}}</div>
@empty
NO POSTS FOUND!
@endforelse

@endsection