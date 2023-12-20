@extends('layouts.main')
@section('container')
<div class="my-5">
  <h1>{{ $title }}</h1>
  @foreach ($categories as $category)
  <ul>
    <li>
      <a href="category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
    </li>
  </ul>
  @endforeach
</div>
@endsection


