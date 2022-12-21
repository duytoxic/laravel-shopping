@extends('front.layout.master')

@section('title', 'Chi tiết sản phẩm')

@section('body')

<div class="page-header-area" data-bg-img="/front/img/photos/bg3.webp">
  <div class="container pt--0 pb--0">
    <div class="row">
      <div class="col-12">
        <div class="page-header-content">
          <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Chi tiết sản phẩm</h2>
          <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
            <ul class="breadcrumb">
              <li><a href="index.html">Trang chủ</a></li>
              <li class="breadcrumb-sep">//</li>
              <li>Chi tiết sản phẩm</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!--== Start Product Single Area Wrapper ==-->
<section class="product-area product-single-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="product-single-item">
          <div class="row">
            <div class="col-xl-6">
              <!--== Start Product Thumbnail Area ==-->
              <div class="product-single-thumb">
                <div class="swiper-container single-product-thumb single-product-thumb-slider">
                  <div class="swiper-wrapper">
                    @foreach ($product->productImages as $productImage)
                    <div class="swiper-slide">
                      <a class="lightbox-image" data-fancybox="gallery" href="front/img/shop/product-single/1.webp">
                        <img src="front/img/shop/product-single/{{ $productImage->path }}" width="570" height="541" alt="Image-HasTech">
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="swiper-container single-product-nav single-product-nav-slider">
                  <div class="swiper-wrapper">
                    @foreach ($product->productImages as $productImage)
                    <div class="swiper-slide">
                      <img src="front/img/shop/product-single/{{ $productImage->path }}" width="127" height="127" alt="Image-HasTech">
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <!--== End Product Thumbnail Area ==-->
            </div>
            <div class="col-xl-6">
              <!--== Start Product Info Area ==-->
              <div class="product-single-info">
                <h3 class="main-title">{{$product->name}}</h3>
                <div class="prices">
                  <span class="price">{{$product->discount}}đ</span>
                </div>
                <div class="rating-box-wrap">
                  <div class="rating-box">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="review-status">
                    <a href="javascript:void(0)">({{count($product->productComments)}}) Bình luận</a>
                  </div>
                </div>
                <p>{{$product->description}}</p>
                {{-- <div class="product-size">
                  <h6 class="title">Size</h6>
                  <ul class="size-list">
                    <li>S</li>
                    <li class="active">M</li>
                    <li>L</li>
                    <li>XL</li>
                  </ul>
                </div> --}}
                <div class="product-quick-action">
                  <div class="qty-wrap">
                    <div class="pro-qty">
                      <input type="text" title="Quantity" value="1" name="qty">
                    </div>
                  </div>
                  <a class="btn-theme" href="./cart/add/{{$product->id}}">Thêm vào giỏ hàng</a>
                </div>
                <div class="product-info-footer mt-2">
                  <h6 class="code"><span>Code :</span>Ch-256xl</h6>
                </div>
              </div>
              <!--== End Product Info Area ==-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="product-review-tabs-content">
          <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
            <li role="presentation">
              <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Thông tin</a>
            </li>
            <li role="presentation">
              <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá <span>({{count($product->productComments)}})</span></a>
            </li>
          </ul>
          <div class="tab-content product-tab-content" id="ReviewTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="product-description">
                <p>{{$product->content}}</p>
              </div>
            </div>
            <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="product-review-content">
                <div class="review-content-header">
                  <h3>Đánh giá</h3>
                  <div class="review-info">
                    <ul class="review-rating">
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star"></li>
                      <li class="fa fa-star-o"></li>
                    </ul>
                    <span class="review-write-btn">Viết bình luận</span>
                  </div>
                </div>

                <!--== Start Reviews Form Item ==-->
                <div class="reviews-form-area">
                  <h4 class="title">Viết bình luận</h4>
                  <div class="reviews-form-content">
                    <form action="" method="POST">
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="user_id"  value="{{Auth::user()->id ?? 2}}">
                      @csrf
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="for_name">Tên</label>
                            <input id="for_name" class="form-control" name="name" type="text" placeholder="Tên">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="for_email">Email</label>
                            <input id="for_email" class="form-control" name="email" type="email" placeholder="Email">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="for_comment">Nội dung (1500)</label>
                            <textarea id="for_comment" class="form-control" name="messages" placeholder="Nội dung"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-submit-btn">
                            <button type="submit" class="btn-submit">Gửi</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!--== End Reviews Form Item ==-->

                <div class="reviews-content-body">
                  @foreach ($product->productComments as $productCmt)
                  <div class="review-item">
                    <div class="review-info">
                      <ul class="review-rating">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $productCmt->rating)
                              <i class="fa fa-star"></i>
                            @else
                              <i class="fa fa-star-o"></i>
                            @endif
                          @endfor
                      </ul>
                    </div>
                    <h3 class="title">{{$productCmt->name}}!</h3>
                    <h5 class="sub-title"><span>{{$productCmt->user->name}}</span> - <span>{{ date('M d, Y', strtotime($productCmt->create_at)) }}</span></h5>
                    <p>{{$productCmt->messages}}</p>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--== End Product Single Area Wrapper ==-->


<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="section-title">
          <h1>Sản phẩm liên quan</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9">
        <div class="row">
          @foreach($relatedProducts as $relatedProd)
          <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
            @include('front.components.product-item', ['product' => $relatedProd])
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ctg-right">
          <a href="#" target="_blank">
            <img class="img-fluid d-block mx-auto" src="front/img/category/c5.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
