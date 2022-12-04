@extends('front.layout.master')

@section('title', 'Product')

@section('body')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
  <div class="container">
    <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
      <div class="col-first">
        <h1>Product Details Page</h1>
        <nav class="d-flex align-items-center">
          <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
          <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
          <a href="single-product.html">product-details</a>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
  <div class="container">
    <div class="row s_product_inner">
      <div class="col-lg-6">
        <div class="s_Product_carousel">
          @foreach ($product->productImages as $productImage)
          <div class="single-prd-item">
            <img class="img-fluid" src="front/img/product/{{ $productImage->path }}" alt="image">
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
          <h3>{{$product->name}}</h3>
          @if($product->discount != null)
          <div class="d-flex align-items-center">
            <h6 class="l-through mr-2">{{ $product->price }}</h6>
            <h2>{{$product->discount}}</h2>
          </div>
          @else
            <h2>{{$product->discount}}</h2>
          @endif

          <ul class="list">
            <li><a class="active" href="#"><span>Thuộc loại</span> : Household</a></li>
            <li><a href="#"><span>Trạng thái</span> : In Stock</a></li>
          </ul>
          <p>{{$product->description}}</p>
          <div class="product_count">
            <label for="qty">Quantity:</label>
            <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
             class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
             class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
          </div>
          <div class="card_area d-flex align-items-center">
            <a class="primary-btn" href="#">Thêm vào giỏ hàng</a>
            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
         aria-selected="false">Thông tin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
         aria-selected="false">Đánh giá</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
        <p>{{ $product->content }}</p>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <h5>Width</h5>
                </td>
                <td>
                  <h5>128mm</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Height</h5>
                </td>
                <td>
                  <h5>508mm</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Depth</h5>
                </td>
                <td>
                  <h5>85mm</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Weight</h5>
                </td>
                <td>
                  <h5>52gm</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Quality checking</h5>
                </td>
                <td>
                  <h5>yes</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Freshness Duration</h5>
                </td>
                <td>
                  <h5>03days</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>When packeting</h5>
                </td>
                <td>
                  <h5>Without touch of hand</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <h5>Each Box contains</h5>
                </td>
                <td>
                  <h5>60pcs</h5>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
        <div class="row">
          <div class="col-lg-6">
            <div class="row total_rate">
              <div class="col-6">
                <div class="box_total">
                  <h5>Tổng thể</h5>
                  <h4>
                    @if (is_integer($avgRating))
                      {{$avgRating}}.0
                    @else
                      {{round($avgRating, 1)}}
                    @endif
                  </h4>
                  <h6>({{ count($product->productComments) }} Bình luận)</h6>
                </div>
              </div>
              <div class="col-6">
                <div class="rating_list">
                  <h3>{{ count($product->productComments) }} Đánh giá</h3>
                  <ul class="list">
                    <li><a href="#">5 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                         class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                    <li><a href="#">4 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                         class="fa fa-star"></i><i class="fa fa-star-o"></i> 01</a></li>
                    <li><a href="#">3 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                         class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 01</a></li>
                    <li><a href="#">2 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                         class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 01</a></li>
                    <li><a href="#">1 Sao <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                         class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 01</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="review_list">
              @foreach ($product->productComments as $productCmt)
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="front/img/user/{{$productCmt->user->avatar ?? 'default-img.jpg'}}" alt="">
                    </div>
                    <div class="media-body">
                      <h4>{{$productCmt->name}} - <span>{{ date('M d, Y', strtotime($productCmt->create_at)) }}</span></h4>
                      @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $productCmt->rating)
                          <i class="fa fa-star"></i>
                        @else
                          <i class="fa fa-star-o"></i>
                        @endif
                      @endfor
                    </div>
                  </div>
                  <p>{{$productCmt->messages}}</p>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-6">
            <div class="review_box">
              <h4>Thêm bình luận</h4>

              <form class="row contact_form d-inline-block" action="" method="post" id="contactForm" novalidate="novalidate">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="messages" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
                  </div>
                </div>

                <div class="personal-rating">
                  <div class="rate">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
                </div>
                  <button type="submit" value="submit" class="primary-btn">Gửi bình luận</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Product Description Area =================-->

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
