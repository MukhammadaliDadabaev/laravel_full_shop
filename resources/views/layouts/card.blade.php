<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <div class="labels">
      <span class="badge badge-success">Новинка</span>

      <span class="badge badge-warning">Рекомендуем</span>

      <span class="badge badge-danger">Хит</span>
    </div>
    <img src="{{ Storage::url($product->image) }}" alt="iPhone Y">
    <div class="caption">
      <h3>{{ $product->name }}</h3>
      <!-- <h4>Цвет: Белый</h4> -->
      <!-- <h4>Внутренняя память: 32гб</h4> -->
      <p>{{ $product->price }}</p>
      <p>
      <form action="{{ route('basket-add', $product) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        <a href="{{ route('product',[$product->category->code, $product->code]) }}" class="btn btn-default" role="button">Подробнее</a>
      </form>
      </p>
    </div>
  </div>
</div>