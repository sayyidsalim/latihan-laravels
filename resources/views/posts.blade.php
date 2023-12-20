@extends('layouts.main')
@section('container')
<div class="my-5">
  <h1 class="mt-5">{{ $title }}</h1>
  @if ($posts->count())
  <div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <h4>
        by : <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
        in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
      </h4>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>

  @else
  <p class="text-center fs-4">not Found</p>
  @endif
  @foreach ($posts as $post)
  <article class="mb-5 border-bottom">
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
      <h2>{{ $post->title }}</h2>
    </a>
    <h4>
      by : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
      in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </h4>
    <div>{{ $post->excerpt }}</div>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none ">Read More</a>
  </article>
  @endforeach
</div>
@endsection