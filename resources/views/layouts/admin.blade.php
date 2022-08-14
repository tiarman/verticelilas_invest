<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Admin | Dashboard</title>

  <meta content="Native NPO System" name="description"/>
  <meta content="MD.Raihan Afroz" name="author"/>
  <meta content="Touch & Solve" name="company"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset("fav.jpg") }}" type="image/png">
  <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">

  <style>
    body {
      font-size: 14px;
    }

    label {
      font-size: 12px;
    }

    .form-control {
      font-size: 14px;
    }

  </style>
  @livewireStyles
  @yield('stylesheet')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">


</head>
<body class="fixed-left">
<!-- Loader -->
<div id="preloader">
  <div id="status">
    <div class="spinner"></div>
  </div>
</div>

<div id="wrapper">
  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">

    <!-- LOGO -->
    <div class="topbar-left">
      <div class="text-center" style="padding-right: 35px">
        <a href="{{ route('home') }}" class="logo">
          <img style="background: whitesmoke;display: unset;height: 60px"
               src="{{ asset($company_logo??'') }}" height="100" alt="logo"></a>
      </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu">
        <ul>
          <li class="menu-title">Main</li>
          <li>
            <a href="{{ route('dashboard') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard</span>
            </a>
          </li>

          <li><a href="" class="waves-effect"><i class="mdi mdi-image-album"></i> <span>Manu</span></a></li>

          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Sliders <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('slider.create') }}">Create new</a></li>
              <li><a href="{{ route('slider.list') }}">List of slider</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Users <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('user.create') }}">Create new</a></li>
              <li><a href="{{ route('user.list') }}">List of user</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span>Who we are <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('who.we.are.create') }}">Create new</a></li>
              <li><a href="{{ route('who.we.are.view') }}">View</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span>Legal Practice Area <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('legal.practice.area.create') }}">Create new</a></li>
              <li><a href="{{ route('legal.practice.area.view') }}">List Legal Practice Area</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span>Practice<span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('practice.area.create') }}">Create new</a></li>
              <li><a href="{{ route('practice.area.view') }}">List Practice</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Clients Says <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('clients.create') }}">Create new</a></li>
              <li><a href="{{ route('clients.list') }}">List of Clients</a></li>
            </ul>

          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Attorney <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('attorney.create') }}">Create new</a></li>
              <li><a href="{{ route('attorney.list') }}">List of Clients</a></li>
            </ul>

          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Team <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('team.create') }}">Create new</a></li>
              <li><a href="{{ route('team.list') }}">List of Team</a></li>
            </ul>

          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Articles <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('article.create') }}">Create new</a></li>
              <li><a href="{{ route('article.list') }}">List of Articles</a></li>
            </ul>

          </li>
          <li class="has_sub">
            <a class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Partners <span
                  class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('partners.create') }}">Create new</a></li>
              <li><a href="{{ route('partners.list') }}">List of Partners</a></li>
            </ul>

          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
  </div>
  <!-- Left Sidebar End -->

  <!-- Start right Content here -->
  <div class="content-page">

    <!-- Start content -->
    <div class="content">

      <!-- Top Bar Start -->
      <div class="topbar">

        <nav class="navbar-custom">
          <!-- Search input -->
          <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
              <input class="search-input" type="search" placeholder="Search"/>
              <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
              </a>
            </div>
          </div>

          <ul class="list-inline float-right mb-0">
            <!-- Fullscreen -->
            <li class="list-inline-item dropdown notification-list hidden-xs-down">
              <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-fullscreen noti-icon"></i>
              </a>
            </li>
            <li class="list-inline-item dropdown notification-list">
              <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                 role="button"
                 aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <a class="dropdown-item" href="{{ route("profile") }}"><i class="dripicons-user text-muted"></i>
                  Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="dripicons-exit text-muted"></i>
                  Logout</a>
              </div>
            </li>
          </ul>
          <!-- Page title -->
          <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
              <button type="button" class="button-menu-mobile open-left waves-effect">
                <i class="ion-navicon"></i>
              </button>
            </li>
            <li class="hide-phone list-inline-item app-search">
              <h3 class="page-title">Dashboard</h3>
            </li>
          </ul>
          <div class="clearfix"></div>
        </nav>
      </div>
      <!-- Top Bar End -->

      <div class="page-content-wrapper">
        @yield('content')
      </div> <!-- Page content Wrapper -->
    </div>
    <footer class="footer">
      © 2022 {{ env('APP_NAME') }}
      <span class="text-muted hidden-xs-down pull-right">Developed & Maintained by  <a href="https://touchandsolve.com"
                                                                                                      target="_blank">Touch & Solve</a></span>
    </footer>
  </div>
</div>

<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/admin/js/waves.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.scrollTo.min.js') }}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>--}}


<!-- App js -->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
{{--@include('sweetalert::alert')--}}
@livewireScripts


<script>
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  })
</script>
@yield('script')
</body>
</html>
