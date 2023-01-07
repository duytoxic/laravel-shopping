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
          Quản lý người dùng
        </div>
      </div>

      <div class="page-title-actions">
        <a href="./admin/user/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
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

          <form action="/admin/user">
            <div class="input-group">
              <input type="search" name="search" id="search" placeholder="Nhập từ khóa..." class="form-control" value="{{ request('search') }}">
              <span class="input-group-append">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i>&nbsp;
                 Tìm kiếm
                </button>
              </span>
            </div>
          </form>

          <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">

            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!-- End Main -->

@endsection('body')
