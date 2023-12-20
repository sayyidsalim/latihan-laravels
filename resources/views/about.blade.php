@extends('layouts.main')

@section('container')
<div class="my-5">
  <h1>ini adalah halaman about</h1>
  <h2>{{ $name }}</h2>
  <h2>{{ $email }}</h2>
  <img src="/img/{{ $image }}" alt="{{ $image }}" width="200" height="200">
</div>
@endsection


