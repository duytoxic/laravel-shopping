@extends('front.layout.master')
@section('title', 'Product')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
  <div class="container">
    <div
      class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end"
    >
      <div class="col-first">
        <h1>Shopping Cart</h1>
        <nav class="d-flex align-items-center">
          <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
          <a href="category.html">Cart</a>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        @if (Cart::count() > 0)
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Giá</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carts as $cart)
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img style="height: 100px; width: 100px; object-fit:cover;" src="front/img/product/{{$cart->options->images[0]->path ?? null}}" alt="cart" />
                  </div>
                  <div class="media-body">
                    <p>{{$cart->name}}</p>
                  </div>
                </div>
              </td>
              <td>
                <h5>{{ number_format($cart->price,2) }}</h5>
              </td>
              <td>
                <div class="product_count">
                  <input
                    type="text"
                    name="qty"
                    id="sst"
                    maxlength="12"
                    value="{{ $cart->qty }}"
                    title="Quantity:"
                    class="input-text qty"
                  />
                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                    class="increase items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                    class="reduced items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-down"></i>
                  </button>
                </div>
              </td>
              <td>
                <h5>{{ number_format($cart->price * $cart->qty,2) }}</h5>
              </td>
              <td>
                <a class="btn btn-sm btn-danger" href="./cart/delete/{{$cart->rowId}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach


            <tr class="bottom_button">
              <td>
                <a class="gray_btn" href="#">Cập nhật giỏ hàng</a>
                <button class="gray_btn" onclick="confirm('Bạn có chắc muốn xóa giỏ hàng') === true ? window.location='./cart/removeAll' : ''">Làm trống giỏ hàng</button>
              </td>
              <td></td>
              <td></td>
              <td>
                <div class="cupon_text d-flex align-items-center">
                  <input type="text" placeholder="Coupon Code" />
                  <a class="primary-btn" href="#">Apply</a>
                  <a class="gray_btn" href="#">Close Coupon</a>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <h5>Tổng tiền</h5>
              </td>
              <td>
                <h5>{{$total}}</h5>
              </td>
            </tr>

            <tr class="out_button_area">
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="checkout_btn_inner d-flex align-items-center">
                  <a class="gray_btn" href="#">Continue Shopping</a>
                  <a class="primary-btn" href="#">Proceed to checkout</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        @else
        <div class="col-lg-12">
          <h4 class="text-center">Giỏ hàng đang trống</h4>
        </div>
        @endif

      </div>
    </div>
  </div>
</section>
<!--================End Cart Area =================-->
@endsection
