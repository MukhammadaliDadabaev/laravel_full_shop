@extends('main')

@section('title', 'Korzina')

@section('content')
<div class="starter-template">
  <h1>Корзина</h1>
  <p>Оформление заказа</p>
  <div class="panel">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Название</th>
          <th>Кол-во</th>
          <th>Цена</th>
          <th>Стоимость</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($order->products as $product)
        <tr>
          <td>
            <a href="{{ route('product',[$product->category->code, $product->code]) }}">
              <img height="56px" src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg">
              {{ $product->name }}
            </a>
          </td>
          <td><span class="badge">{{ $product->pivot->count }}</span>
            <div class="btn-group form-inline">
              <form action="{{ route('basket-remove', $product) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
              </form>
              <form action="{{ route('basket-add', $product) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
              </form>
            </div>
          </td>
          <td>{{ $product->price }} ₽</td>
          <td>{{ $product->getPriceForCount() }} ₽</td>
        </tr>
        @endforeach

        <tr>
          <td colspan="3">Общая стоимость:</td>
          <td>{{ $order->getFullPrice() }}</td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="form-inline pull-right">
        <form method="POST" action="http://127.0.0.1:8000/basket/coupon">
          <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP"> <label for="coupon">Добавить купон:</label>
          <input class="form-control" type="text" name="coupon">
          <button type="submit" class="btn btn-success">Добавить</button>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <br>
      <div class="btn-group pull-right" role="group">
        <a type="button" class="btn btn-success" href="http://127.0.0.1:8000/basket/place">Оформить заказ</a>
      </div>
    </div>
  </div>
</div>

@endsection