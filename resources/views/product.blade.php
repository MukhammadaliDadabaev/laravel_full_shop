@extends('layouts.main')

@section('title', 'Product')

@section('content')

<h1>iPhone XL</h1>
<h2>{{ $product }}</h2>
<h2>Мобильные телефоны</h2>
<p>Цена: <b>20221 ₽</b></p>

<h4>Цвет: Белый</h4>
<h4>Внутренняя память: 128гб</h4>

<img src="http://localhost/storage/products/iphone_x_silver.jpg">
<p>Огромный продвинутый телефон</p>

<form action="http://127.0.0.1:8000/basket/add/2" method="POST">
  <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
</form>


@endsection