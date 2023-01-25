@extends('layouts.main')

@section('title', 'Categories')

@section('content')


    @foreach ($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="{{ Storage::url($category->image) }}">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
        </div>
    @endforeach


@endsection
