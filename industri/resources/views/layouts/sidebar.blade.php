<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('AdminLTE/index3.html')}}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png"')}}'
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('elektro')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Elektronik<i class="right fas"></i></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('tambang')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Pertambangan<i class="right fas"></i></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Perminyakan<i class="right fas"></i></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Perkayuan<i class="right fas"></i></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Logout<i class="right fas"></i></p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>