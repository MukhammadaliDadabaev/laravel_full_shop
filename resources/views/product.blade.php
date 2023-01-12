@extends('main')

@section('title', 'Product')

@section('content')
<div class="starter-template">
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

    <input type="hidden" name="_token" value="gmkLC31KuTY3o6j67AXLd4VB3A813SGDmgr8d25Q">
  </form>
</div>

@endsection