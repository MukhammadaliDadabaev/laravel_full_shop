<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <div class="labels">
      <span class="badge badge-success">Новинка</span>

      <span class="badge badge-warning">Рекомендуем</span>

      <span class="badge badge-danger">Хит</span>
    </div>
    <img src="http://localhost/storage/products/KdSSTgXPwtM96AKBV7hacbJX9WSMmc2g96mrdcL9.jpg" alt="iPhone Y">
    <div class="caption">
      <h3>{{ $product->name }}</h3>
      <!-- <h4>Цвет: Белый</h4> -->
      <!-- <h4>Внутренняя память: 32гб</h4> -->
      <p>{{ $product->price }}</p>
      <p>
      <form action="{{ route('basket') }}" method="POST">
        @csrf
        {{ $product->category->name }}
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        <a href="http://127.0.0.1:8000/portable/iphone_y/1" class="btn btn-default" role="button">Подробнее</a>
        <input type="hidden" name="_token" value="A3rX0ddMsecib9HmuR3Az1AftjqfH78PKo6sVLdP">
      </form>
      </p>
    </div>
  </div>
</div>