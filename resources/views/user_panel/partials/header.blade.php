<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>
  
     
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{url('assets/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Affordable Homes</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
          <div class="info">
            <a href="#" class="d-block">Welcome user</a>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           
              <li class="nav-item">
                <a href="{{ route('user.account') }}" class="nav-link {{ Route::is('user.account') ? 'active' : '' }}">
                    {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                    {{-- <i class="nav-icon fas fa-icon-dashboard"></i> --}}
                 <p>Dashboard</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('user.projectQueries') }}" class="nav-link {{ Route::is('user.projectQueries') ? 'active' : '' }}">
                    {{-- <!--<i class="nav-icon fas fa-tachometer-alt"></i>--> --}}
                    {{-- <i class="fab fa-hotspot"></i> --}}
                 <p>Project Queries</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('user.purchaseDetails') }}" class="nav-link {{ Route::is('user.purchaseDetails') ? 'active' : '' }}">
                    {{-- <!--<i class="nav-icon fas fa-tachometer-alt"></i>--> --}}
                    {{-- <i class="fab fa-hotspot"></i> --}}
                 <p>Purchase Details</p>
                </a>
              </li>
           
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>