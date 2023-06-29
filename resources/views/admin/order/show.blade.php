@extends('admin.layout.master')

@section('title', 'Chi tiết đơn hàng')

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
          Chi tiết đơn hàng

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-body display_data">


          <div class="position-relative row form-group">
            <label for="featured" class="col-md-3 text-md-right col-form-label"
              >Status</label
            >
            <div class="col-md-9 col-xl-8">
              @if ($order->status == 1)
                    <button class="btn btn-sm btn-success">Hiện</button>
                  @else
                    <button class="btn btn-sm btn-danger">Ẩn</button>
                  @endif
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Main -->
@endsection('body')
