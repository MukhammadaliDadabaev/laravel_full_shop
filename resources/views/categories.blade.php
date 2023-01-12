@extends('main')

@section('title', 'Categories')

@section('content')
<div class="starter-template">

  @foreach ($categories as $category )
  <div class="panel">
    <a href="{{ route('category', $category->code) }}">
      <img src="http://localhost/storage/categories/mobile.jpg">
      <h2>{{ $category->name }}</h2>
    </a>
    <p>
      {{ $category->description }}
  </div>
  @endforeach

</div>
@endsection