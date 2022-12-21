@extends('front.layout.master')
@section('title', 'Thông tin cá nhân')
@section('body')
<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="./front/assets/img/photos/bg3.webp">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Tài khoản</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Tài khoản</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start My Account Wrapper ==-->
  <section class="my-account-area">
    <div class="container pt--0 pb--0">
      <div class="row">
      <div class="col-lg-12">
        <div class="myaccount-page-wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <nav>
                <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Thông tin</button>
                  <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false"> Đơn hàng</button>
                  <button class="nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info" aria-selected="false">Thông tin tài khoản</button>
                  <button class="nav-link" onclick="window.location.href='/account/logout'" type="button">Đăng xuất</button>
                </div>
              </nav>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                  <div class="myaccount-content">
                    <h3>Thông tin cá nhân</h3>
                    <div class="welcome">
                      <p>Xin chào, <strong>{{Auth::user()->name}}</strong> (Nếu không phải <strong>{{Auth::user()->name}} !</strong><a href="/account/logout" class="logout"> Đăng xuất</a>)</p>
                    </div>
                    <p>Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây của mình, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                  <div class="myaccount-content">
                    <h3>Đơn hàng</h3>
                    <div class="myaccount-table table-responsive text-center">
                      <table class="table table-bordered">
                        <thead class="thead-light">
                          <tr>
                            <th>STT</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($orders as $key => $order)
                          <tr>
                            <td>{{$key+=1}}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                              @if ($order->status == 1)
                                <button class="btn btn-sm btn-success">Hoàn thành</button>
                              @else
                                <button class="btn btn-sbtn-warning">Hoàn thành</button>
                              @endif
                            </td>
                            <td>{{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}đ</td>
                            <td><a href="/account/detail/{{$order->id}}" class="check-btn sqr-btn ">Chi tiết</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                  <div class="myaccount-content">
                    <h3>Thông tin cá nhân</h3>
                    <div class="account-details-form">
                      <form action="#">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="single-input-item">
                              <label for="first-name" class="required">First Name</label>
                              <input type="text" id="first-name" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="single-input-item">
                              <label for="last-name" class="required">Last Name</label>
                              <input type="text" id="last-name" />
                            </div>
                          </div>
                        </div>
                        <div class="single-input-item">
                          <label for="display-name" class="required">Display Name</label>
                          <input type="text" id="display-name" />
                        </div>
                        <div class="single-input-item">
                          <label for="email" class="required">Email Addres</label>
                          <input type="email" id="email" />
                        </div>
                        <fieldset>
                          <legend>Password change</legend>
                          <div class="single-input-item">
                            <label for="current-pwd" class="required">Current Password</label>
                            <input type="password" id="current-pwd" />
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="new-pwd" class="required">New Password</label>
                                <input type="password" id="new-pwd" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="confirm-pwd" class="required">Confirm Password</label>
                                <input type="password" id="confirm-pwd" />
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="single-input-item">
                          <button class="check-btn sqr-btn">Save Changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--== End My Account Wrapper ==-->
</main>
@endsection
