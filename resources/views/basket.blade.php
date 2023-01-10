<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин: Корзина</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' property='stylesheet' href='//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1657531602&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'>
  <script src='//127.0.0.1:8000/_debugbar/assets/javascript?v=1657531602' data-turbolinks-eval='false' data-turbo-eval='false'></script>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://127.0.0.1:8000">Интернет Магазин</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://127.0.0.1:8000">Все товары</a></li>
          <li><a href="http://127.0.0.1:8000/categories">Категории</a>
          </li>
          <li class="active"><a href="http://127.0.0.1:8000/basket">В корзину</a></li>
          <li><a href="http://127.0.0.1:8000/reset">Сбросить проект в начальное состояние</a></li>
          <li><a href="http://127.0.0.1:8000/locale/en">en</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://127.0.0.1:8000/currency/RUB">₽</a></li>
              <li><a href="http://127.0.0.1:8000/currency/USD">$</a></li>
              <li><a href="http://127.0.0.1:8000/currency/EUR">€</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://127.0.0.1:8000/login">Войти</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
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
            <tr>
              <td>
                <a href="http://127.0.0.1:8000/portable/iphone_y/5">
                  <img height="56px" src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg">
                  iPhone Y
                </a>
              </td>
              <td><span class="badge">1</span>
                <div class="btn-group form-inline">
                  <form action="http://127.0.0.1:8000/basket/remove/5" method="POST">
                    <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                    <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
                  </form>
                  <form action="http://127.0.0.1:8000/basket/add/5" method="POST">
                    <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
                  </form>
                </div>
              </td>
              <td>46264 ₽</td>
              <td>46264 ₽</td>
            </tr>
            <tr>
              <td colspan="3">Общая стоимость:</td>
              <td>46264 ₽</td>
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
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>Категории товаров</p>
          <ul>
            <li><a href="http://127.0.0.1:8000/mobiles">Мобильные телефоны</a></li>
            <li><a href="http://127.0.0.1:8000/portable">Портативная техника</a></li>
            <li><a href="http://127.0.0.1:8000/appliances">Бытовая техника</a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <p>Самые популярные товары</p>
          <ul>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>