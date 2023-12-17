@extends('layouts.main')
@section('container')
<div class="my-5">
  <article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <div>{{ $post["post"] }}</div>
  </article>
  <a href="/blog" class="mt-10">Back To Post</a>
</div>
@endsection