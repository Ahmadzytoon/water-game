<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('https://i.pinimg.com/736x/4b/5b/c3/4b5bc3a16497a150bb364cf9e897c47a.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Water Game</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>

          </li>

          {{-- _______________________________________ --}}
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="#" class="nav-link @yield('Reservation')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reservation                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.reservation.index')}}" class="nav-link @yield('Reservation')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link @yield('Reservation')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edite</p>
                </a>
              </li>
            </ul>

          </li>
             {{-- _______________________________________ --}}
          <li class="nav-item">
            <a href="#" class="nav-link @yield('Activity')">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Activity
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.activity.index')}}" class="nav-link @yield('Activity')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{route('admin.activity.edit')}}" class="nav-link @yield('Activity')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{route('admin.activity.create')}}" class="nav-link @yield('Activity')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>

          </li>
          {{-- _______________________________________ --}}
          <li class="nav-item">
            <a href="#" class="nav-link @yield('Users')">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link @yield('Users')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link @yield('Users')">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Edite</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link @yield('Users')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a> --}}

            </ul>
          </li>
           {{-- _______________________________________ --}}


          {{-- _______________________________________ --}}
          <li class="nav-header">_________</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          {{-- _______________________________________ --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
