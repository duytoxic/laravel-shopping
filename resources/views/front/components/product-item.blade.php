<div class="product-item">
  <div class="inner-content">
    <div class="product-thumb">
      <a href="/shop/product/{{$product->id}}">
        <img src="front/img/shop/{{$product->productImages[0]->path}}" class="product-image" width="270" alt="Image-HasTech">
      </a>
      <div class="product-action">
        <a class="btn-product-cart" href="./cart/add/{{$product->id}}"><i class="fa fa-shopping-cart"></i></a>
        <a class="btn-product-compare" href="/shop/product/{{$product->id}}"><i class="fa fa-eye"></i></a>
      </div>
    </div>
    <div class="product-info">
      <div class="category">
        <ul>
          <a href="/shop/{{$product->productCategory->name}}">{{$product->productCategory->name}}</a>
        </ul>
      </div>
      <h4 class="title"><a href="/shop/product/{{$product->id}}">{{$product->name}}</a></h4>
      <div class="prices">
        @if ($product->discount != null)
          {{-- <span class="price-old">{{number_format($product->price, 0, '', ',')}}đ</span> --}}
          <span class="price-old">{{$product->price}}đ</span>
          <span class="sep">-</span>
          <span class="price">{{number_format($product->discount, 0, '', ',')}}đ</span>
        @else
          <span class="price">{{number_format($product->price, 0, '', ',')}}đ</span>
        @endif
      </div>
    </div>
  </div>
</div>
