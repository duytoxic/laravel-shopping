<!doctype html>
<html lang="en">

<head>
  <base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin - Shopping</title>
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description"
    content="This is an example dashboard (CodeLean) created using build-in elements and components.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <link href="./dashboard/main.css" rel="stylesheet">
  <link href="./dashboard/my_style.css" rel="stylesheet">
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        {{-- <div class="logo-src"></div> --}}
        <div class="header__pane ml-auto">
          <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class="app-header__mobile-menu">
        <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="app-header__menu">
        <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
              <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
          </button>
        </span>
      </div>
      <div class="app-header__content">
        <div class="app-header-left">


        </div>
        <div class="app-header-right">


          <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
              <div class="widget-content-wrapper">
                <div class="widget-content-left">
                  <div class="btn-group">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                      <img width="42" class="rounded-circle" src="/front/img/default-img.png" alt="">
                      <i class="fa fa-angle-down ml-2 opacity-8"></i>
                    </a>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                      class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                      <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-info">
                          <div class="menu-header-image opacity-2"
                            style="background-image: url('/dashboard/assets/images/dropdown-header/city3.jpg');">
                          </div>
                          <div class="menu-header-content text-left">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <img width="42" class="rounded-circle" src="/front/img/default-img.png" alt="">
                                </div>
                                <div class="widget-content-left">
                                  <div class="widget-heading">Admin</div>

                                </div>
                                <div class="widget-content-right mr-2">
                                  <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="scroll-area-xs" style="height: 150px;">
                        <div class="scrollbar-container ps">
                          <ul class="nav flex-column">
                            <li class="nav-item-header nav-item">Activity</li>
                            <li class="nav-item">
                              <a href="javascript:void(0);" class="nav-link">Chat
                                <div class="ml-auto badge badge-pill badge-info">8</div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="javascript:void(0);" class="nav-link">Recover
                                Password</a>
                            </li>
                            <li class="nav-item-header nav-item">My Account
                            </li>
                            <li class="nav-item">
                              <a href="javascript:void(0);" class="nav-link">Settings
                                <div class="ml-auto badge badge-success">New</div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="javascript:void(0);" class="nav-link">Messages
                                <div class="ml-auto badge badge-warning">512</div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="javascript:void(0);" class="nav-link">Logs</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item-divider mb-0 nav-item"></li>
                      </ul>


                    </div>
                  </div>
                </div>
                <div class="widget-content-left  ml-3 header-user-info">
                  <div class="widget-heading"> Admin </div>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="app-main">
      <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="scrollbar-sidebar">
          <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading">Menu</li>

              <li class="mm-active">
                <a href="#">
                  <i class="metismenu-icon pe-7s-plugin"></i>Applications
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                  <li>
                    <a href="./admin/user" class="{{ (request()->segment(1) == 'admin/user') ? 'mm-active' : '' }}">
                      <i class="metismenu-icon"></i>Người dùng
                    </a>
                  </li>
                  <li>
                    <a href="./admin/order" class="{{ (request()->segment(1) == 'admin/order') ? 'mm-active' : '' }}">
                      <i class="metismenu-icon"></i>Đơn hàng
                    </a>
                  </li>
                  <li>
                    <a href="./admin/product" class="{{ (request()->segment(1) == 'admin/product') ? 'mm-active' : '' }}">
                      <i class="metismenu-icon"></i>Sản phẩm
                    </a>
                  </li>
                  <li>
                    <a href="./admin/category" class="{{ (request()->segment(1) == 'admin/category') ? 'mm-active' : '' }}">
                      <i class="metismenu-icon"></i>Danh mục sản phẩm
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="app-main__outer">

        @yield('body')

        <div class="app-wrapper-footer">
          <div class="app-footer">
            <div class="app-footer__inner">

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="app-drawer-overlay d-none animated fadeIn"></div>

  <script src="./dashboard/assets/scripts/jquery-3.2.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="./dashboard/assets/scripts/main.js"></script>
  <script type="text/javascript" src="./dashboard/assets/scripts/my_script.js"></script>
</body>

</html>
