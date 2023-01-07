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
          Hình ảnh sản phẩm

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <div class="position-relative row form-group">
            <label for="name" class="col-md-3 text-md-right col-form-label"
              >Tên sản phẩm</label
            >
            <div class="col-md-9 col-xl-8">
              <input
                disabled
                placeholder="Tên sản phẩm"
                type="text"
                class="form-control"
                value="{{$product->name}}"
                readonly
              />
            </div>
          </div>

          <div class="position-relative row form-group">
            <label for="" class="col-md-3 text-md-right col-form-label"
              >Images</label
            >
            <div class="col-md-9 col-xl-8">
              <form method="post" action="/admin/product/{{$product->id}}/image" enctype="multipart/form-data">
              <ul class="text-nowrap" id="images">

                @foreach ($productImages as $productImage)
                  <li
                    class="float-left d-inline-block mr-2 mb-2"
                    style="position: relative; width: 32%"
                  >
                    {{-- <form action="" method="post">
                      <button
                        type="submit"
                        onclick="return confirm('Do you really want to delete this item?')"
                        class="btn btn-sm btn-outline-danger border-0 position-absolute"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </form> --}}
                    <div style="width: 100%; height: 220px; overflow: hidden">
                      <img src="/front/img/shop/{{$productImage->path}}" alt="Image" />
                    </div>
                  </li>
                @endforeach


                <li
                  class="float-left d-inline-block mr-2 mb-2"
                  style="width: 32%"
                >

                    @csrf
                    <div
                      style="width: 100%; max-height: 220px; overflow: hidden"
                    >
                      <img
                        style="width: 100%; cursor: pointer"
                        class="thumbnail"
                        data-toggle="tooltip"
                        title="Click to add image"
                        data-placement="bottom"
                        src="/dashboard/assets/images/add-image-icon.jpg"
                        alt="Add Image"
                      />

                      <input
                        name="image"
                        type="file"
                        onchange="changeImg(this); this.form.submit"
                        accept="/image/x-png,image/gif,image/jpeg"
                        class="image form-control-file"
                        style="display: none"
                        required
                      />

                      <input type="hidden" name="product_id" value="{{$product->id}}" />

                    </div>


                </li>
              </ul>
            </div>
            <div class="d-block"><input type="submit" value="Thêm"></div>
          </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection('body')
