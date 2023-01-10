<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин: Категория Мобильные телефоны</title>

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
          <li class="active"><a href="http://127.0.0.1:8000/categories">Категории</a>
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
      <h1>
        @if ($category == 'mobiles')
        Мобильные телефоны
        @elseif($category == 'portable')
        Портативная техника
        @elseif($category == 'appliances')
        Бытовая техника
        @endif
      </h1>
      <p>
        В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
      </p>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>81229 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/9" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/9" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 128гб</h4>
              <p>20221 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/10" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/10" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>75860 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/11" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/11" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 128гб</h4>
              <p>49499 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/12" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/12" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>72115 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/13" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/13" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 128гб</h4>
              <p>9183 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/14" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/14" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Золотой</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>80745 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/15" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/15" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


            </div>
            <img src="http://localhost/storage/products/iphone_x_silver.jpg" alt="iPhone XL">
            <div class="caption">
              <h3>iPhone XL</h3>
              <h4>Цвет: Золотой</h4>
              <h4>Внутренняя память: 128гб</h4>
              <p>43077 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/16" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_xl/16" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/htc_one_s.png" alt="HTC One S">
            <div class="caption">
              <h3>HTC One S</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>60700 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/17" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/htc_one_s/17" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">

              <span class="badge badge-warning">Рекомендуем</span>

              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/htc_one_s.png" alt="HTC One S">
            <div class="caption">
              <h3>HTC One S</h3>
              <h4>Цвет: Черный</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>35691 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/18" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/htc_one_s/18" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>83667 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/19" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/19" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Белый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>93076 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/20" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/20" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>45439 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/21" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/21" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Серебристый</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>49757 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/22" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/22" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Золотой</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>93172 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/23" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/23" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="labels">


              <span class="badge badge-danger">Хит</span>
            </div>
            <img src="http://localhost/storage/products/iphone_5.jpg" alt="iPhone 5SE">
            <div class="caption">
              <h3>iPhone 5SE</h3>
              <h4>Цвет: Золотой</h4>
              <h4>Внутренняя память: 64гб</h4>
              <p>72264 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/24" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/iphone_5se/24" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
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

            </div>
            <img src="http://localhost/storage/products/samsung_j6.jpg" alt="Samsung Galaxy J6">
            <div class="caption">
              <h3>Samsung Galaxy J6</h3>
              <h4>Цвет: Золотой</h4>
              <h4>Внутренняя память: 32гб</h4>
              <p>6430 ₽</p>
              <p>
              <form action="http://127.0.0.1:8000/basket/add/25" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="http://127.0.0.1:8000/mobiles/samsung_j6/25" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="rhTUSuQ29nnNKzYgbibKlwYp3Bmb7cRFa6G7CsTY">
              </form>
              </p>
            </div>
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