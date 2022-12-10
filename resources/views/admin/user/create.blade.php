@extends('admin.layout.master')

@section('title', 'Nguời dùng')

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
          Thêm người dùng
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
                >Tên người dùng</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="name"
                  id="name"
                  placeholder="Name"
                  type="text"
                  class="form-control"
                  value=""
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="email" class="col-md-3 text-md-right col-form-label"
                >Email</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="email"
                  id="email"
                  placeholder="Email"
                  type="email"
                  class="form-control"
                  value=""
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="password" class="col-md-3 text-md-right col-form-label"
                >Mật khẩu</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="password"
                  id="password"
                  placeholder="Mật khẩu"
                  type="password"
                  class="form-control"
                  value=""
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="cfpassword" class="col-md-3 text-md-right col-form-label"
                >Xác nhận mật khẩu</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="cfpassword"
                  id="cfpassword"
                  placeholder="nhập lại mật khẩu"
                  type="password"
                  class="form-control"
                  value=""
                />
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="cfpassword" class="col-md-3 text-md-right col-form-label"
                >Vai trò</label
              >
              <div class="col-md-9 col-xl-8">
                <select class="form-control" name="level" id="level">
                    <option value="0">Admin</option>
                    <option value="1" selected>Người dùng</option>
                </select>
              </div>
            </div>

            <div class="position-relative row form-group mb-1">
              <div class="col-md-9 col-xl-8 offset-md-2">
                <a href="/admin/category" class="border-0 btn btn-outline-danger mr-1">
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
