@extends('layouts.main')

@section('title', 'Product')

@section('content')

    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <h2>Мобильные телефоны</h2>
    <p>Цена: <b>{{ $product->price }}</b></p>
    {{-- <h4>Цвет: Белый</h4> --}}
    {{-- <h4>Внутренняя память: 128гб</h4> --}}
    <img style="height: 350px" width="500px" src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>

    <form action="{{ route('basket-add', $product) }}" method="POST">
        @csrf
        @if ($product->isAvailable())
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        @else
            Не доступен
        @endif
    </form>

@endsection
