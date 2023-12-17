@extends('layouts.main')
@section('container')
<div class="my-5">
  @foreach ($posts as $post)
  <article class="mb-5">
    <a href="/posts/{{ $post["slug"] }}">
      <h2>{{ $post["title"] }}</h2>
    </a>
    <h5> By: {{ $post["author"] }}</h5>
    <div>{{ $post["post"] }}</div>
  </article>
  @endforeach
</div>
@endsection