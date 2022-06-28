@extends('layouts.app')

@section('title', $post['title'])

@section('content')
@if($post['is_new'])
<div>A new blog is post! using if</div>
@elseif(!$post['is_new'])
<div>blog post is old! using elseif</div>
@endif
@unless($post['is_new'])
<div>it is an old post...using unless</div>
@endunless
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

@isset($post['has_comments'])
<div>the post has some comments... using isset</div>
@endisset

@endsection