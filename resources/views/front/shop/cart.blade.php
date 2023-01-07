@extends('front.layout.master')
@section('title', 'Giỏ hàng')
@section('body')
<!--== Start Page Header Area Wrapper ==-->
<div class="page-header-area" data-bg-img="front/img/photos/bg3.webp">
  <div class="container pt--0 pb--0">
    <div class="row">
      <div class="col-12">
        <div class="page-header-content">
          <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Shopping Cart</h2>
          <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="breadcrumb-sep">//</li>
              <li>Shopping Cart</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Page Header Area Wrapper ==-->

 <!--== Start Blog Area Wrapper ==-->
 <section class="shopping-cart-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="shopping-cart-form table-responsive">

            @if (Cart::count() > 0)
            <table class="table text-center">
              <thead>
                <tr>
                  <th class="product-remove">&nbsp;</th>
                  <th class="product-thumb">&nbsp;</th>
                  <th class="product-name">Sản phẩm</th>
                  <th class="product-price">Giá</th>
                  <th class="product-quantity">Số lượng</th>
                  <th class="product-subtotal">Tổng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($carts as $cart)
                <tr class="cart-product-item">
                  <td class="product-remove">
                    <a onclick="window.location='./cart/delete/{{$cart->rowId}}'"><i class="fa fa-trash-o"></i></a>
                  </td>
                  <input type="hidden" value="{{$cart->rowId}}" name="rowId">
                  <td class="product-thumb">
                    <a href="./shop/product/">
                      <img src="front/img/shop/{{$cart->options->images[0]->path ?? null}}" width="90" height="110" alt="Image-HasTech">
                    </a>
                  </td>
                  <td class="product-name">
                    <h4 class="title"><a href="single-product.html">{{$cart->name}}</a></h4>
                  </td>
                  <td class="product-price">
                    <span class="price">{{number_format($cart->price * $cart->qty, 0, '', ',')}}đ</span>
                  </td>
                  <td class="product-quantity">
                    <div class="pro-qty">
                      <input type="text" class="quantity" title="Quantity" value="{{ $cart->qty }}" data-rowId="{{$cart->rowId}}">
                    </div>
                  </td>
                  <td class="product-subtotal">
                    <span class="price">{{ number_format($cart->price * $cart->qty, 0, '', ',') }}đ</span>
                  </td>
                </tr>
                @endforeach
                <tr class="actions">
                  <td class="border-0" colspan="6">
                    <button type="submit" class="update-cart" disabled>Cập nhật giỏ hàng</button>
                    {{-- <a href="cart/update">Cập nhật giỏ hàng</a> --}}
                    {{-- <input type="submit" value="Cập nhật giỏ hàng"> --}}
                    <button type="submit" class="clear-cart" onclick="confirm('Bạn có chắc muốn xóa giỏ hàng') === true ? window.location='./cart/removeAll' : ''">Xóa giỏ hàng</button>
                    <a href="/shop" class="btn-theme btn-flat">Tiếp tục mua sắm</a>
                  </td>
                </tr>
              </tbody>

            </table>
            @else
            <div class="col-lg-12">
              <h4 class="text-center" >Giỏ hàng đang trống</h4>
            </div>
            @endif
        </div>
      </div>
    </div>
    <div class="row row-gutter-50">
      <div class="col-md-6 col-lg-4">

      </div>
      <div class="col-md-6 col-lg-4">

      </div>
      <div class="col-md-12 col-lg-4">
        <div class="shipping-form-cart-totals">
          <div class="section-title-cart">
            <h5 class="title">Giỏ hàng</h5>
          </div>
          <div class="cart-total-table">
            <table class="table">
              <tbody>
                {{-- <tr class="cart-subtotal">
                  <td>
                    <p class="value">Tổng tiền</p>
                  </td>
                  <td>
                    <p class="price">{{$subtotal}}đ</p>
                  </td>
                </tr> --}}
                <tr class="order-total">
                  <td>
                    <p class="value">Tổng</p>
                  </td>
                  <td>
                    <p class="price">{{$total}}đ</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <a class="btn-theme btn-flat" href="./checkout">Thanh toán</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--== End Blog Area Wrapper ==-->
@endsection
