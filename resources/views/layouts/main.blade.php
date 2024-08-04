<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title ?? 'Dashboard web desa' }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/modules/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/css/components.css">
<!-- Start GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div> <!-- Tambahkan penutup div disini -->
        <ul class="navbar-nav ml-auto navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{ asset('stisla') }}/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="/user/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Sukaramah</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SK</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
              <a href="/user/dashboard" class="nav-link "><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('user/suket*') ? 'active' : '' }}">
              <a href="{{ route('user.suket') }}" class="nav-link "><i class="fa fa-folder"></i><span>Suket</span></a>
            </li>
            <li class="{{ Request::is('user/pengaduan*') ? 'active' : '' }}">
              <a href="{{ route('user.pengaduan') }}" class="nav-link "><i class="fa fa-headset"></i><span>Pengaduan</span></a>
            </li>
            <li class="{{ Request::is('user/kritik*') ? 'active' : '' }}">
              <a href="{{ route('user.kritik') }}" class="nav-link "><i class="fa fa-comment"></i><span>Kritik & Saran</span></a>
            </li>
          </ul>
       </aside>
      </div>

      <!-- Main Content -->
     @yield('content')
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Develop by <a href="">Nesya</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('stisla') }}/modules/jquery.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/popper.js"></script>
  <script src="{{ asset('stisla') }}/modules/tooltip.js"></script>
  <script src="{{ asset('stisla') }}/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('stisla') }}/modules/moment.min.js"></script>
  <script src="{{ asset('stisla') }}/js/stisla.js"></script>
  

  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla') }}/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('stisla') }}/js/scripts.js"></script>
  <script src="{{ asset('stisla') }}/js/custom.js"></script>
</body>
</html>