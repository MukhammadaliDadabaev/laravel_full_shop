<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин: @yield('title')</title>

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
        <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('index') }}">Все товары</a></li>
          <li><a href="{{ route('categories') }}">Категории</a>
          </li>
          <li><a href="{{ route('basket') }}">В корзину</a></li>
          <li><a href="{{ route('index') }}">Сбросить проект в начальное состояние</a></li>
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
          <li><a href="{{ route('index') }}">Войти</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="starter-template">
      @if(session()->has('success'))
      <p class="alert alert-success">{{ session()->get('success') }}</p>
      @endif
      @if(session()->has('warning'))
      <p class="alert alert-warning">{{ session()->get('warning') }}</p>
      @endif
      @yield('content')
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