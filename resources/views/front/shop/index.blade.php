@extends('front.layout.master')

@section('title', 'Product')

@section('body')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Danh mục sản phẩm</div>
					<ul class="main-categories">
            @foreach ($categories as $category)
              <li class="main-nav-list">
                <a href="shop/{{$category->name}}">
                  {{$category->name}}<span class="number">(29)</span>
                </a>
              </li>
            @endforeach
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Bộ lọc sản phẩm</div>

					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="d-flex justify-content-between align-items-center">
					<form action="" class="filter-bar d-flex flex-wrap align-items-center">
						<div class="sorting">
							<select name="sort_by" onchange="this.form.submit();">
								<option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">Mới nhất</option>
								<option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">Cũ nhất</option>
								<option {{ request('sort_by') == 'name-ascending' ? 'selected' : '' }} value="name-ascending">Tên: A-Z</option>
								<option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }} value="name-descending">Tên: Z-A</option>
								<option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }} value="price-ascending">Giá: tăng</option>
								<option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }} value="price-descending">Giá: giảm</option>
							</select>
						</div>
						<div class="sorting mr-auto">
							<select name="show" onchange="this.form.submit();">
								<option {{ request('show') == '3' ? 'selected' : '' }} value="3">Hiển thị 3</option>
								<option {{ request('show') == '6' ? 'selected' : '' }} value="6">Hiển thị 6</option>
								<option {{ request('show') == '9' ? 'selected' : '' }} value="9">Hiển thị 9</option>
								<option {{ request('show') == '12' ? 'selected' : '' }} value="12">Hiển thị 12</option>
							</select>
						</div>
					</form>
          <form class="product-search" action="shop">
            <div class="input-group">
              <input type="text" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
            @foreach ($products as $product)
              <div class="col-lg-4 col-md-6">
                @include('front.components.product-item')
              </div>
            @endforeach
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex align-items-center">
          {{$products->links()}}
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

@endsection
