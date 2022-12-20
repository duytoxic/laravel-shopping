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

      <div class="page-title-actions">
        <a
          href="./admin/product/create"
          class="btn-shadow btn-hover-shine mr-3 btn btn-primary"
        >
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fa fa-plus fa-w-20"></i>
          </span>
          Thêm mới
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
          <form action="/admin/product">
            <div class="input-group">
              <input
                type="text"
                name="search"
                id="search"
                placeholder="Nhập từ khóa..."
                class="form-control"
                value="{{ request('search') }}"
              />
              <span class="input-group-append">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i>&nbsp; Tìm kiếm
                </button>
              </span>
            </div>
          </form>

          <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table
            class="align-middle mb-0 table table-borderless table-striped table-hover"
          >
            <thead>
              <tr>
                <th class="text-center">STT</th>
                <th>Tên sản phẩm</th>
                <th class="text-center">Loại sản phẩm</th>
                <th class="text-center">Giá gốc</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $key => $product)
              <tr>
                <td class="text-center text-muted">{{$key+1}}</td>
                <td>
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left flex2">
                        <div class="widget-heading">
                          <a href="/admin/product/{{$product->id}}" class="widget-heading">
                          {{$product->name}}
                        </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center text-muted">{{$product->productCategory->name}}</td>
                <td class="text-center text-muted">{{number_format($product->price, 0, '', ',')}}đ</td>
                <td class="text-center text-muted">
                  @if ($product->status == 1)
                    <button class="btn btn-sm btn-success">Hiện</button>
                  @else
                    <button class="btn btn-sm btn-danger">Ẩn</button>
                  @endif
                </td>
                <td class="text-center d-flex align-items-center justify-content-center">
                  <a
                    href="./admin/product/{{$product->id}}/edit"
                    data-toggle="tooltip"
                    title="Edit"
                    data-placement="bottom"
                    class="btn btn-outline-warning border-0 btn-sm"
                  >
                    <span class="btn-icon-wrapper opacity-8">
                      <i class="fa fa-edit fa-w-20"></i>
                    </span>
                  </a>
                  <div>
                    <button
                      class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                      type="submit"
                      data-toggle="tooltip"
                      title="Delete"
                      data-placement="bottom"
                      onclick="confirm('Bạn có chắc muốn xóa sản phẩm này') === true ? window.location='./admin/product/delete/{{$product->id}}' : ''"
                    >
                      <span class="btn-icon-wrapper opacity-8">
                        <i class="fa fa-trash fa-w-20"></i>
                      </span>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="d-block card-footer">
          {{$products->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Main -->
@endsection('body')
