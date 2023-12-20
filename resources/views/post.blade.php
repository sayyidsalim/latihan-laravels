@extends('layouts.main')
@section('container')
<div class="my-5">
  <article>
    <h2>{{ $post->title }}</h2>
    <h5> <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
      <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">
        {{ $post->category->name }}
      </a>
    </h5>
    <div>{!! $post->body!!}</div>
  </article>
  <a href="/blog" class="mt-lg-1 d-block">Back To Post</a>
  

</div>
@endsection

