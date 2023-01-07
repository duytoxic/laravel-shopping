@extends('front.layout.master')

@section('title', 'Product')

@section('body')

 <!--== Start Page Header Area Wrapper ==-->
 <div class="page-header-area" data-bg-img="/front/img/photos/bg3.webp">
  <div class="container pt--0 pb--0">
    <div class="row">
      <div class="col-12">
        <div class="page-header-content">
          <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Sản phẩm</h2>
          <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
            <ul class="breadcrumb">
              <li><a href="index.html">Trang chủ</a></li>
              <li class="breadcrumb-sep">//</li>
              <li>Sản phẩm</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Page Header Area Wrapper ==-->

  <main class="main-content">
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area">
      <div class="container">
        <div class="row flex-xl-row-reverse justify-content-between">
          <div class="col-xl-9">
            <div class="row">
              <div class="col-12">
                <div class="shop-top-bar">
                  <div class="shop-top-left">
                    <p class="pagination-line"> <a href="#">{{count($products)}}</a> Sản phẩm</p>
                  </div>
                  <div class="shop-top-center">
                    <nav class="product-nav">
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>
                      </div>
                    </nav>
                  </div>
                  <div class="shop-top-right">
                    <form action=""">
                      <div class="sorting d-flex align-items-center">
                        <span>Sắp xếp :</span>
                        <select class="form-select" name="sort_by" onchange="this.form.submit();">
                          <option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">Mới nhất</option>
                          <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">Cũ nhất</option>
                          <option {{ request('sort_by') == 'name-ascending' ? 'selected' : '' }} value="name-ascending">Tên: A-Z</option>
                          <option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }} value="name-descending">Tên: Z-A</option>
                          <option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }} value="price-ascending">Giá: tăng</option>
                          <option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }} value="price-descending">Giá: giảm</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                    <div class="row">
                      @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-4">
                          @include('front.components.product-item')
                        </div>
                      @endforeach

                      <div class="col-12">
                        <div class="pagination-items">
                          {{$products->links()}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                    <div class="row">
                      @foreach ($products as $product)
                      <div class="col-md-12">
                        <!--== Start Product Item ==-->
                        <div class="product-item product-list-item">
                          <div class="inner-content">
                            <div class="product-thumb">
                              <a href="single-product.html">
                                <img src="front/img/shop/{{$product->productImages[0]->path}}" width="322" height="360" alt="Image-HasTech">
                              </a>
                              @if ($product->discount != null)
                              <div class="product-flag">
                                <ul>
                                  <li class="discount">Giảm giá</li>
                                </ul>
                              </div>
                              @endif
                              <div class="product-action">
                                <a class="btn-product-cart" href="./cart/add/{{$product->id}}"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn-product-compare" href="/shop/product/{{$product->id}}"><i class="fa fa-eye"></i></a>
                              </div>
                            </div>
                            <div class="product-info">
                              <div class="category">
                                <a href="/shop">{{$product->productCategory->name}}</a>
                              </div>
                              <h4 class="title"><a href="/shop/product/{{$product->id}}">{{$product->name}}</a></h4>
                              <div class="prices">
                                @if ($product->discount != null)
                                  <span class="price-old">{{number_format($product->price, 0, '', ',')}}đ</span>
                                  <span class="sep">-</span>
                                  <span class="price">{{number_format($product->discount, 0, '', ',')}}đ</span>
                                @else
                                  <span class="price">{{number_format($product->price, 0, '', ',')}}đ</span>
                                @endif
                              </div>
                              <p>{{$product->description}}</p>
                              <a class="btn-theme btn-sm" href="./cart/add/{{$product->id}}">Thêm vào giỏ hàng</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach


                      </div>
                      <div class="col-12">
                        <div class="pagination-items">
                          {{$products->links()}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-xl-3">
            <div class="shop-sidebar">
              <div class="shop-sidebar-category">
                <h4 class="sidebar-title">Danh mục sản phẩm</h4>
                <div class="sidebar-category">
                  <ul class="category-list mb--0">
                    @foreach ($categories as $key => $category)
                    <li>
                      <a href="shop/{{$category->name}}">
                        {{$category->name}}<span>({{$countCategories[$key]->products_count}})</span>
                      </a>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>


@endsection
