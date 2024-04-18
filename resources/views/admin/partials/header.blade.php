<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

    </ul>

  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="{{ route('admin.dashboard') }}" class="brand-link">

      <img src="{{url('assets/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"

        class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">Affordable Homes</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">



        <div class="info">

          <a href="{{ route('admin.dashboard') }}" class="d-block">

            <i class="nav-icon mr-2">

              <img src="{{ asset('assets/img/administrator.png') }}" alt="admin">

            </i>

            Welcome {{ session('name') }}

          </a>

        </div>

      </div>



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



          <li class="nav-item">

            <a href="{{ route('admin.dashboard') }}" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>Dashboard</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.services') }}" class="nav-link">

              <i class="nav-icon fa-brands fa-servicestack"></i>

              <p>Services</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.projects') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-lightbulb"></i>

              <p>Projects</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.purchase.details') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-usd"></i>

              <p>Purchase Details</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.properties') }}" class="nav-link">

              <i class="nav-icon fa-solid fa fa-globe"></i>

              <p>Properties</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.contractors') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-helmet-safety"></i>

              <p>Contractors</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.customers.info') }}" class="nav-link">

              <i class="nav-icon fa-solid fa fa-info"></i>

              <p>Customers Info</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.testimonials') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-user-group"></i>

              <p>Testimonials</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.goals') }}" class="nav-link">

              <i class="nav-icon fa-solid fa fa-bullseye"></i>

              <p>Goals</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.view.queries') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-clipboard-question"></i>

              <p>Queries</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.logout') }}" class="nav-link">

              <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>

              <p>Logout</p>

            </a>

          </li>

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>