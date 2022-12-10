@extends('admin.layout.master')

@section('title', 'Người dùng')

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
          Đơn hàng
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
          <form action="/admin/order">
            <div class="input-group">
              <input
                type="search"
                name="search"
                id="search"
                placeholder="Nhập từ khóa"
                class="form-control"
                {{ request('search') }}
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
                <th>Khách hàng / Sản phẩm</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">Tổng tiền</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $key => $order)
              <tr>
                <td class="text-center text-muted">{{$key+1}}</td>
                <td>
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left flex2">
                        <div class="widget-heading">{{$order->last_name . ' ' . $order->first_name}}</div>
                        <div class="widget-subheading opacity-7">

                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">{{$order->calc_shipping_district}}</td>
                <td class="text-center"></td>
                <td class="text-center">
                  <div class="badge badge-dark">Finish</div>
                </td>
                <td class="text-center">
                  <a
                    href="./order-show.html"
                    class="btn btn-hover-shine btn-outline-primary border-0 btn-sm"
                  >
                    Details
                  </a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>

        <div class="d-block card-footer">
          {{$orders->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Main -->
@endsection('body')
