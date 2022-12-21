@extends('front.layout.master')
@section('title', 'Đặt hàng')
@section('body')

<main class="main-content">
    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="shopping-checkout-wrap">
      <div class="container text-center">
        <div class="notification d-flex flex-column justify-content-center">
          <h3 class="fw-bold mb-2">Hiện chúng tôi chưa hỗ trợ hình thức thanh toán online</h3>
          <p>Cảm ơn quý khách hàng đã gửi đăng ký mua hàng

          </p>
        </div>
        <a href="./shop" class="btn-theme mt-4">Tiếp tục mua sắm</a>
      </div>
    </section>
  </main>

@endsection
