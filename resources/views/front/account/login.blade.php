@extends('front.layout.master')
@section('title', 'Đăng nhập')
@section('body')
<section class="account-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <div class="section-title text-center">
          <h2 class="title">Đăng nhập</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="login-form-content">
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
                  <label for="email">Tài khoản email <span class="required">*</span></label>
                  <input id="email" name="email" class="form-control" type="email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="password">Mật khẩu <span class="required">*</span></label>
                  <input id="password" class="form-control" name="password" type="password">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group account-info-group mb-3">
                  <div class="rememberme-account">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="remember" id="remember">
                      <label class="form-check-label" for="remember">Nhớ tài khoản</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <button class="btn-login" type="submit">Đăng nhập</button>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group account-info-group mb-3">
                  <a class="lost-password" href="#/">Quên mật khẩu?</a>
                  <p>Bạn chưa có tài khoản?<a class="" style="color: #eb3e32" href="/account/register"> Đăng ký</a></p>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
