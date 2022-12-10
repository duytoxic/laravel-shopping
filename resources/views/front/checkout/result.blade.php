@extends('front.layout.master')
@section('title', 'Đặt hàng')
@section('body')

<main class="main-content">
    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="shopping-checkout-wrap">
      <div class="container text-center">
        <div class="notification d-flex flex-column justify-content-center">
          <img src="https://baohaauto.vn/wp-content/uploads/cam-on-ban-da-dang-ky-form-4.png" alt="icon">
          <h3 class="fw-bold mb-2">Đăng ký mua hàng thành công!</h3>
          <p>Cảm ơn quý khách hàng đã gửi đăng ký mua hàng, vui lòng kiểm tra mail để cập nhật thêm thông tin</p>
        </div>
        <a href="./shop" class="btn-theme mt-4">Tiếp tục mua sắm</a>
      </div>
    </section>
  </main>

@endsection
