@extends('layouts.main')
@section('container')
<div class="my-5">
  <h1>{{ $title }}</h1>
  @foreach ($posts as $post)
  <article class="mb-5">
      <h2>Post Category : <a href="">{{ $category }}</a></h2>
    </a>
    <h5> By: {{ $post->excerpt }}</h5>
  </article>
  @endforeach
</div>
@endsection