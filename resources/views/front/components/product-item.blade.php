<div class="product-item">
  <div class="inner-content">
    <div class="product-thumb">
      <a href="/shop/product/{{$product->id}}">
        <img src="front/img/shop/{{$product->productImages[0]->path}}" width="270" height="274" alt="Image-HasTech">
      </a>
      <div class="product-action">
        <a class="btn-product-cart" href="./cart/add/{{$product->id}}"><i class="fa fa-shopping-cart"></i></a>
        <a class="btn-product-compare" href="/shop/product/{{$product->id}}"><i class="fa fa-eye"></i></a>
      </div>
    </div>
    <div class="product-info">
      <div class="category">
        <ul>
          <li><a href="shop.html">Men</a></li>
          <li class="sep">/</li>
          <li><a href="shop.html">Women</a></li>
        </ul>
      </div>
      <h4 class="title"><a href="/shop/product/{{$product->id}}">{{$product->name}}</a></h4>
      <div class="prices">
        @if ($product->discount != null)
          <span class="price-old">{{$product->price}}đ</span>
          <span class="sep">-</span>
          <span class="price">{{$product->discount}}đ</span>
        @else
          <span class="price">{{$product->price}}đ</span>
        @endif
      </div>
    </div>
  </div>
</div>
