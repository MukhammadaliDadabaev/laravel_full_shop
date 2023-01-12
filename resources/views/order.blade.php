@extends('main')

@section('title', 'Оформление заказа')

@section('content')
<div class="starter-template">
  <p class="alert alert-success">Добавлен товар iPhone XL</p>
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
        <tr>
          <td>
            <a href="http://127.0.0.1:8000/mobiles/iphone_xl/10">
              <img height="56px" src="http://localhost/storage/products/iphone_x_silver.jpg">
              iPhone XL
            </a>
          </td>
          <td><span class="badge">1</span>
            <div class="btn-group form-inline">
              <form action="http://127.0.0.1:8000/basket/remove/10" method="POST">
                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                <input type="hidden" name="_token" value="Z4jitR4bMB1Vfmb1UvP6KZ6BBfyhSlWGMKf5QyDu">
              </form>
              <form action="http://127.0.0.1:8000/basket/add/10" method="POST">
                <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                <input type="hidden" name="_token" value="Z4jitR4bMB1Vfmb1UvP6KZ6BBfyhSlWGMKf5QyDu">
              </form>
            </div>
          </td>
          <td>20221 ₽</td>
          <td>20221 ₽</td>
        </tr>
        <tr>
          <td colspan="3">Общая стоимость:</td>
          <td>20221 ₽</td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="form-inline pull-right">
        <form method="POST" action="http://127.0.0.1:8000/basket/coupon">
          <input type="hidden" name="_token" value="Z4jitR4bMB1Vfmb1UvP6KZ6BBfyhSlWGMKf5QyDu"> <label for="coupon">Добавить купон:</label>
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