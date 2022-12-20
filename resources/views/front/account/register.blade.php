@extends('front.layout.master')
@section('title', 'Đăng ký')
@section('body')

<main class="main-content">
  <!--== Start My Account Area Wrapper ==-->
  <section class="account-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 m-auto">
          <div class="section-title text-center">
            <h2 class="title">Đăng ký</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="register-form-content">
            @if (session('notification'))
              <div class="alert alert-warning" role="alert">
                {{ session('notification') }}
              </div>
            @endif
            <form action="" method="POST">
              @csrf
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="name">Tên người dùng<span class="required">*</span></label>
                    <input id="name" class="form-control" name="name" type="text">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="email">Địa chỉ Email<span class="required">*</span></label>
                    <input id="email" class="form-control" name="email" type="email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="password">Mật khẩu <span class="required">*</span></label>
                    <input id="password" class="form-control" name="password" type="password">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="cf_password">Nhập lại mật khẩu <span class="required">*</span></label>
                    <input id="cf_password" class="form-control" name="cf_password" type="password">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group mb--0">
                    <button class="btn-register" type="submit">Đăng ký</button>
                    {{-- <a class="btn-register" href="/account/login">Đăng ký</a> --}}
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End My Account Area Wrapper ==-->
</main>

@endsection
