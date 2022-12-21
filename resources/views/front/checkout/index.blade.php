@extends('front.layout.master')
@section('title', 'Thanh toán')
@section('body')
<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="front/img/photos/bg3.webp">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">
              Thanh toán
            </h2>
            <nav
              class="breadcrumb-area"
              data-aos="fade-down"
              data-aos-duration="1200"
            >
              <ul class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Thanh toán</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start Shopping Checkout Area Wrapper ==-->
  <section class="shopping-checkout-wrap">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="checkout-page-login-wrap">
            <!--== Start Checkout Login Accordion ==-->
            {{-- <div class="login-accordion" id="LoginAccordion">
              <div class="card">
                <h3>
                  <i class="fa fa-info-circle"></i>
                  Returning customer?
                  <a
                    href="#/"
                    data-bs-toggle="collapse"
                    data-bs-target="#loginaccordion"
                    >Click here to login</a
                  >
                </h3>
                <div
                  id="loginaccordion"
                  class="collapse"
                  data-bs-parent="#LoginAccordion"
                >
                  <div class="card-body">
                    <div class="login-wrap">
                      <p>
                        If you have shopped with us before, please enter your
                        details below. If you are a new customer, please proceed
                        to the Billing & Shipping section.
                      </p>
                      <form action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="logEmail"
                                >Username or email
                                <span class="required">*</span></label
                              >
                              <input
                                id="logEmail"
                                class="form-control"
                                type="email"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group left-m">
                              <label for="logPass"
                                >Password <span class="required">*</span></label
                              >
                              <input
                                id="logPass"
                                class="form-control"
                                type="password"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mt-30">
                              <button class="btn-login">Login</button>
                              <div class="rememberme-account">
                                <div class="custom-control custom-checkbox">
                                  <input
                                    type="checkbox"
                                    class="custom-control-input visually-hidden"
                                    id="remembermePass"
                                  />
                                  <label
                                    class="custom-control-label"
                                    for="remembermePass"
                                    >Remember me</label
                                  >
                                </div>
                              </div>
                              <a class="lost-password" href="#"
                                >Lost your password?</a
                              >
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <!--== End Checkout Login Accordion ==-->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="checkout-page-coupon-wrap">
            <!--== Start Checkout Coupon Accordion ==-->
            <div class="coupon-accordion" id="CouponAccordion">
              <div class="card">
                <h3>
                  <i class="fa fa-info-circle"></i>
                  Have a Coupon?
                  <a
                    href="#/"
                    data-bs-toggle="collapse"
                    data-bs-target="#couponaccordion"
                    >Click here to enter your code</a
                  >
                </h3>
                <div
                  id="couponaccordion"
                  class="collapse"
                  data-bs-parent="#CouponAccordion"
                >
                  <div class="card-body">
                    <div class="apply-coupon-wrap mb-60">
                      <p>If you have a coupon code, please apply it below.</p>
                      <form action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input
                                class="form-control"
                                type="text"
                                placeholder="Coupon code"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <button class="btn-coupon">Apply coupon</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Checkout Coupon Accordion ==-->
          </div>
        </div>
      </div>
      <form action="" method="post">
        @csrf
      <div class="row">
        <div class="col-lg-6">
          <!--== Start Billing Accordion ==-->
          <div class="checkout-billing-details-wrap">
            <h2 class="title">Chi tiết đơn hàng</h2>
            <div class="billing-form-wrap">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="f_name"
                        >Họ
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <input id="f_name" name="first_name" type="text" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="l_name"
                        >Tên
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <input id="l_name" name="last_name" type="text" class="form-control" value="{{ Auth::user()->name ?? '' }}"" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="country"
                        >Thành phố / Tỉnh
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <select id="country" class="form-control" name="calc_shipping_provinces" required>
                        <option value="">Tỉnh / Thành phố</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="town_city"
                        >Quận / Huyện
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <select id="town_city" class="form-control" name="calc_shipping_district" required>
                        <option value="">Quận / Huyện</option>
                      </select>
                    </div>
                  </div>

                  <input class="billing_address_1" name="" type="hidden" value="">
                  <input class="billing_address_2" name="" type="hidden" value="">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="street-address"
                        >Địa chỉ
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <input
                        id="street-address"
                        type="text"
                        name="street_address"
                        class="form-control"
                        placeholder="Số nhà, tên đường,..."
                        value="{{ Auth::user()->address ?? '' }}"
                        required
                      />
                    </div>

                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="pz-code">Postcode / ZIP (tùy chọn)</label>
                      <input id="pz-code" name="postcode_zip" type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone">Điện thoại <abbr class="required" title="required">*</abbr></label>
                      <input id="phone" type="text" name="phone" class="form-control" required value="{{ Auth::user()->phone ?? '' }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" data-margin-bottom="30">
                      <label for="email"
                        >Email
                        <abbr class="required" title="required">*</abbr></label
                      >
                      <input id="email" type="text" name="email" class="form-control" value="{{ Auth::user()->email ?? '' }}" required/>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="form-group mb--0">
                      <label for="order-notes">Lưu ý khi giao hàng (tùy chọn)</label>
                      <textarea
                        id="order-notes"
                        class="form-control"
                        name="note"
                        placeholder="Notes about your order, e.g. special notes for delivery."
                      ></textarea>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!--== End Billing Accordion ==-->
        </div>
        <div class="col-lg-6">
          @if (Cart::count() > 0)
               <!--== Start Order Details Accordion ==-->
          <div class="checkout-order-details-wrap">
            <div class="order-details-table-wrap table-responsive">
              <h2 class="title mb-25">Đơn hàng của bạn</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-total">Tổng tiền</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  @foreach ($carts as $cart)
                  <tr class="cart-item">
                    <td class="product-name">
                      {{$cart->name}}<span class="product-quantity">× {{$cart->qty}}</span>
                    </td>
                    <td class="product-total">{{ number_format($cart->price * $cart->qty,2) }}đ</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot class="table-foot">
                  <tr class="cart-subtotal">
                    <th>Subtotal</th>
                    <td>{{$subtotal}}</td>
                  </tr>
                  <tr class="order-total">
                    <th>Tổng tiền</th>
                    <td>{{$total}}</td>
                  </tr>
                </tfoot>
              </table>
              <div class="shop-payment-method">
                <div id="PaymentMethodAccordion">
                  <div class="card">
                    <div class="card-header" id="check_payments">
                      <label for="pc-check"
                      >
                      <input type="radio" id="pc-check" name="payment_type" value="pay_later">
                        Thanh toán khi giao hàng
                    </label>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="check_payments3">
                      <label for="payment-check"
                      >
                      <input type="radio" id="payment-check" name="payment_type"  value="online_payment">
                      Chuyển khoản trực tiếp
                      </h5>
                    </div>
                    <div
                      id="itemThree"
                      class="collapse"
                      aria-labelledby="check_payments3"
                      data-bs-parent="#PaymentMethodAccordion"
                    >
                      <div class="card-body">
                        <p>Pay with cash upon delivery.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="p-text">
                  Your personal data will be used to process your order, support
                  your experience throughout this website, and for other
                  purposes described in our <a href="#/">privacy policy.</a>
                </p>
                <div class="agree-policy">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      id="privacy"
                      class="custom-control-input visually-hidden"
                    />
                    <label for="privacy" class="custom-control-label"
                      >Tôi đã đọc và đồng ý với các điều khoản và điều kiện của website
                      <span class="required">*</span></label
                    >
                  </div>
                </div>
                <div class="text-center ">
                  <input type="submit" class="btn-theme mx-auto mt-3" value="Đặt hàng">
                </div>
              </div>
            </div>
          </div>
          <!--== End Order Details Accordion ==-->
          @else

          @endif

        </div>
      </div>
    </form>
    </div>
  </section>
</main>
@endsection

