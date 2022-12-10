@extends('admin.layout.master')

@section('title', 'Sản phẩm')

@section('body')

<!-- Main -->
<div class="app-main__inner">
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon">
          <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
        </div>
        <div>
          Sản phẩm
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="position-relative row form-group">
              <label for="name" class="col-md-3 text-md-right col-form-label"
                >Tên sản phẩm</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="name"
                  id="name"
                  placeholder=""
                  type="text"
                  class="form-control"
                  value=""
                />
              </div>
            </div>
            <div class="position-relative row form-group">
              <label for="product_category_id" class="col-md-3 text-md-right col-form-label"
                >Loại sản phẩm</label
              >
              <div class="col-md-9 col-xl-8">
                <select class="form-control" name="product_category_id" id="product_category_id">
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>

              </div>
            </div>
            <div class="position-relative row form-group">
              <label for="description" class="col-md-3 text-md-right col-form-label"
                >Mô tả</label
              >
              <div class="col-md-9 col-xl-8">
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
              </div>
            </div>
            <div class="position-relative row form-group">
              <label for="price" class="col-md-3 text-md-right col-form-label"
                >Giá</label
              >
              <div class="col-md-9 col-xl-8">
                <input class="form-control"  type="text" name="price" id="price">
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="discount" class="col-md-3 text-md-right col-form-label"
                >Giá giảm</label
              >
              <div class="col-md-9 col-xl-8">
                <input class="form-control" type="text" name="discount" id="discount">
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="sku" class="col-md-3 text-md-right col-form-label"
                >SKU</label
              >
              <div class="col-md-9 col-xl-8">
                <input class="form-control" type="text" name="sku" id="sku">
              </div>
            </div>

            <div class="position-relative row form-group">
              <div class="col-lg-3 text-md-right">
                <label for="status" class="text-right">Trạng thái</label>
              </div>
              <div class="col-md-9 col-xl-8">
                <select class="form-control" name="status" id="status">
                  <option value="1" selected>Hiện</option>
                  <option value="0">Ẩn</option>
              </select>
              </div>
            </div>

            <div class="position-relative row form-group mb-1">
              <div class="col-md-9 col-xl-8 offset-md-2">
                <a href="/admin/product" class="border-0 btn btn-outline-danger mr-1">
                  <span class="btn-icon-wrapper pr-1 opacity-8">
                    <i class="fa fa-times fa-w-20"></i>
                  </span>
                  <span>Hủy bỏ</span>
                </a>

                <button
                  type="submit"
                  class="btn-shadow btn-hover-shine btn btn-primary"
                >
                  <span class="btn-icon-wrapper pr-2 opacity-8">
                    <i class="fa fa-download fa-w-20"></i>
                  </span>
                  <span>Lưu</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Main -->
@endsection('body')
