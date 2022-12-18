@extends('admin.layout.master')

@section('title', 'Danh mục sản phẩm')

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
                  placeholder="Tên sản phẩm"
                  type="text"
                  class="form-control"
                  value="{{$product->name}}"
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="price" class="col-md-3 text-md-right col-form-label"
                >Giá gốc</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="price"
                  id="price"
                  placeholder="Giá"
                  type="text"
                  class="form-control"
                  value="{{number_format($product->price, 0, '', ',')}}"
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="discount" class="col-md-3 text-md-right col-form-label"
                >Giảm giá</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="discount"
                  id="discount"
                  placeholder="Giá"
                  type="text"
                  class="form-control"
                  value="{{number_format($product->discount, 0, '', ',')}}"
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="tag" class="col-md-3 text-md-right col-form-label"
                >Tag</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="tag"
                  id="tag"
                  placeholder="Giá"
                  type="text"
                  class="form-control"
                  value="{{$product->tag}}"
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="description" class="col-md-3 text-md-right col-form-label"
                >Mô tả</label
              >
              <div class="col-md-9 col-xl-8">
                <textarea name="description" class="form-control" id="description" cols="30" rows="3">{{$product->description}}</textarea>
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
