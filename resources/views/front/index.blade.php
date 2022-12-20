@extends('front.layout.master')

@section('title', 'Home')

@section('body')

<!-- start product Area -->
{{-- <section class="owl-carousel active-product-area section_gap">
  <!-- single product slide -->
  <div class="single-product-slider">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="section-title">
            <h1>Giày Nam</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($manProducts as $manProduct)
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <img class="img-fluid" src="/front/img/product/{{ $manProduct->productImages[0]->path }}" alt="">
            <div class="product-details">
              <h6>{{ $manProduct->name }}</h6>
              <div class="price">
                @if($manProduct->discount != null)
                  <h6>{{ $manProduct->discount }}</h6>
                  <h6 class="l-through">{{ $manProduct->price }}</h6>
                @else
                  <h6 class="l-through">{{ $manProduct->price }}</h6>
                @endif

              </div>
              <div class="prd-bottom">

                <a href="#" class="social-info">
                  <span class="ti-bag"></span>
                  <p class="hover-text">add to bag</p>
                </a>
                <a href="#" class="social-info">
                  <span class="lnr lnr-heart"></span>
                  <p class="hover-text">Wishlist</p>
                </a>
                <a href="#" class="social-info">
                  <span class="lnr lnr-sync"></span>
                  <p class="hover-text">compare</p>
                </a>
                <a href="#" class="social-info">
                  <span class="lnr lnr-move"></span>
                  <p class="hover-text">view more</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- single product slide -->
  <div class="single-product-slider">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="section-title">
            <h1>Giày Nữ</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($womanProducts as $womanProduct)
        <div class="col-lg-3 col-md-6">
          @include('front.components.product-item', ['product' => $womanProduct])
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section> --}}
<!-- end product Area -->
<main class="main-content">
 <!--== Start Page Header Area Wrapper ==-->
 <div class="page-header-area" data-bg-img="/front/assets/img/photos/bg3.webp">
  <div class="container pt--0 pb--0">
    <div class="row">
      <div class="col-12">
        <div class="page-header-content">
          <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Account</h2>
          <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="breadcrumb-sep">//</li>
              <li>Account</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Page Header Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
  <section class="product-area product-default-area mt-5">
    <div class="container pt--0">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Sản phẩm nổi bật</h3>
            <div class="desc">
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($featuredProducts as $featuredProduct)
        <div class="col-sm-6 col-lg-3">
          @include('front.components.product-item', ['product' => $featuredProduct])
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--== End Product Area Wrapper ==-->

  <!--== Start Divider Area Wrapper ==-->
  <section class="bg-color-f2 position-relative z-index-1">
    <div class="container pt--0 pb--0">
      <div class="row divider-wrap divider-style1">
        <div class="col-lg-6">
          <div class="divider-content" data-title="NEW">
            <h4 class="sub-title">Saving 50%</h4>
            <h2 class="title">All Online Store</h2>
            <p class="desc">Offer Available All Shoes & Products</p>
            <a class="btn-theme" href="shop.html">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-layer-wrap">
      <div class="bg-layer-style z-index--1 parallax" data-speed="1.05" data-bg-img="front/img/photos/bg1.webp"></div>
    </div>
  </section>
  <!--== End Divider Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
  <section class="product-area product-best-seller-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Best Seller</h3>
            <div class="desc">
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-slider-wrap">
            <div class="swiper-container product-slider-col4-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-flag">
                          <ul>
                            <li class="discount">-10%</li>
                          </ul>
                        </div>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Modern Smart Shoes</a></h4>
                        <div class="prices">
                          <span class="price-old">$200</span>
                          <span class="sep">-</span>
                          <span class="price">$240.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Quickiin Mens shoes</a></h4>
                        <div class="prices">
                          <span class="price">$440.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-flag">
                          <ul>
                            <li class="discount">-10%</li>
                          </ul>
                        </div>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Rexpo Womens shoes</a></h4>
                        <div class="prices">
                          <span class="price-old">$130</span>
                          <span class="sep">-</span>
                          <span class="price">$333.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                        <div class="prices">
                          <span class="price">$540.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Primitive Mens shoes</a></h4>
                        <div class="prices">
                          <span class="price-old">$40</span>
                          <span class="sep">-</span>
                          <span class="price">$280.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Product Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product.html">
                          <img src="front/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                        </a>
                        <div class="product-flag">
                          <ul>
                            <li class="discount">-10%</li>
                          </ul>
                        </div>
                        <div class="product-action">
                  <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                        <a class="banner-link-overlay" href="shop.html"></a>
                      </div>
                      <div class="product-info">
                        <div class="category">
                  <ul>
                    <li><a href="shop.html">Men</a></li>
                            <li class="sep">/</li>
                            <li><a href="shop.html">Women</a></li>
                          </ul>
                        </div>
                        <h4 class="title"><a href="single-product.html">Simple Fabric Shoe</a></h4>
                        <div class="prices">
                          <span class="price-old">$400</span>
                          <span class="sep">-</span>
                          <span class="price">$580.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End prPduct Item ==-->
                </div>
              </div>
            </div>
            <!--== Add Swiper Arrows ==-->
            <div class="product-swiper-btn-wrap">
              <div class="product-swiper-btn-prev">
                <i class="fa fa-arrow-left"></i>
              </div>
              <div class="product-swiper-btn-next">
                <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Area Wrapper ==-->

  <!--== Start Divider Area Wrapper ==-->
  <section>
    <div class="container pt--0 pb--0">
      <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
        <div class="col-lg-6">
          <div class="divider-thumb-content">
            <div class="thumb">
              <a href="shop.html">
                <img src="front/img/shop/banner/1.webp" width="570" height="350" alt="Image-HasTech">
              </a>
            </div>
            <div class="content">
              <h2 class="title">Sports Shoes</h2>
              <p class="desc">Up To 30% Off All Shoes & Products</p>
              <a class="btn-theme" href="shop.html">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="divider-thumb-content">
            <div class="thumb">
              <a href="shop.html">
                <img src="front/img/shop/banner/2.webp" width="570" height="700" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Divider Area Wrapper ==-->

</main>

@endsection('body')
