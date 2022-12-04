<div class="single-product">
  <img class="img-fluid" src="front/img/product/{{$product->productImages[0]->path}}" alt="product">
  <div class="product-details">
    <a href="/shop/product/{{$product->id}}">{{$product->name}}</h6>
    <div class="price">
      @if ($product->discount != null)
        <h6>{{$product->discount}}đ</h6>
        <h6 class="l-through">{{$product->price}}đ</h6>
      @else
        <h6>{{$product->price}}đ</h6>
      @endif
    </div>
    <div class="prd-bottom">

      <a href="./cart/add/{{$product->id}}" class="social-info">
        <span class="ti-bag"></span>
        <p class="hover-text">Thêm vào giỏ hàng</p>
      </a>
      <a href="/shop/product/{{$product->id}}" class="social-info">
        <span class="lnr lnr-move"></span>
        <p class="hover-text">Xem chi tiết</p>
      </a>
    </div>
  </div>
</div>
