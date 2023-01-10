<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин: Главная</title>

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
          <li class="active"><a href="http://127.0.0.1:8000">Все товары</a></li>
          <li><a href="http://127.0.0.1:8000/categories">Категории</a>
          </li>
          <li><a href="http://127.0.0.1:8000/basket">В корзину</a></li>
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
      <h1>Все товары</h1>
      <form method="GET" action="http://127.0.0.1:8000">
        <div class="filters row">
          <div class="col-sm-6 col-md-3">
            <label for="price_from">Цена от <input type="text" name="price_from" id="price_from" size="6" value="">
            </label>
            <label for="price_to">до <input type="text" name="price_to" id="price_to" size="6" value="">
            </label>
          </div>
          <div class="col-sm-2 col-md-2">
            <label for="hit">
              <input type="checkbox" name="hit" id="hit"> Хит </label>
          </div>
          <div class="col-sm-2 col-md-2">
            <label for="new">
              <input type="checkbox" name="new" id="new"> Новинка </label>
          </div>
          <div class="col-sm-2 col-md-2">
            <label for="recommend">
              <input type="checkbox" name="recommend" id="recommend"> Рекомендуем </label>
          </div>
          <div class="col-sm-6 col-md-3">
            <button type="submit" class="btn btn-primary">Фильтр</button>
            <a href="http://127.0.0.1:8000" class="btn btn-warning">Сброс</a>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>25128 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/1" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/1" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>45074 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/2" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/2" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>81113 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/3" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/3" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>51941 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/4" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/4" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>46264 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/5" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/5" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">
              <span class="badge badge-success">Новинка</span>

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
            <div class="caption">
              <h3>iPhone Y</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>30780 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/6" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/portable/iphone_y/6" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
              </form>
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <ul class="pagination">

          <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
          </li>





          <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=3">3</a></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=4">4</a></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=5">5</a></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=6">6</a></li>
          <li class="page-item"><a class="page-link" href="?&amp;page=7">7</a></li>


          <li class="page-item">
            <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
          </li>
        </ul>
      </nav>

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