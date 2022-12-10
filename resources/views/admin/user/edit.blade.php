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
          Người dùng
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
                >Họ và tên</label
              >
              <div class="col-md-9 col-xl-8">
                <input
                  required
                  name="name"
                  id="name"
                  placeholder="Họ và tên"
                  type="text"
                  class="form-control"
                  value="{{$user->name}}"
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
                  type="text"
                  class="form-control"
                  value="{{$user->email}}"
                />
              </div>
            </div>
            <div class="position-relative row form-group">
              <label for="description" class="col-md-3 text-md-right col-form-label"
                >Mô tả</label
              >
              <div class="col-md-9 col-xl-8">
                <textarea name="description" class="form-control" id="description" cols="30" rows="3" value="{{$user->description}}">{{$user->description}}</textarea>
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="level" class="col-md-3 text-md-right col-form-label"
                >Vai trò</label
              >
              <div class="col-md-9 col-xl-8">
                <select class="form-control" name="level" id="level">
                  @if ($user->level == 0)
                    <option value="{{$user->level}}" selected>Admin</option>
                    <option value="1">Người dùng</option>
                  @else
                    <option value="0">Admin</option>
                    <option value="{{$user->level}}" selected>Người dùng</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="position-relative row form-group">
              <label for="name" class="col-md-3 text-md-right col-form-label"
                >Ảnh đại diện</label
              >
              <div class="col-md-9 col-xl-8">
                @if ($user->avatar != null)
                  <img src="./front/img/user/{{$user->avatar}}" alt="avatar" class="img-avatar">
                @else
                  <img src="./front/img/default-img.png" alt="avatar">
                @endif
              </div>
            </div>

            <div class="position-relative row form-group mb-1">
              <div class="col-md-9 col-xl-8 offset-md-2">
                <a href="/admin/user" class="border-0 btn btn-outline-danger mr-1">
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
