<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ovo blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Michael Ovo</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="./index3.html" class="nav-link">
                   <i class="fa fa-dashboard nav-icon text-white"></i>
                   <p>Dashboard</p>
                 </a>
               </li>

          <li class="nav-item has-treeview ">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-edit text-info"></i>
              <p>
                Blogs
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link ">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tags.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Tags</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fa fa-cogs text-success "></i>
                <p>
                  Management
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>Users</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-warning"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="fa fa-power-off nav-icon text-danger"></i>
                  <p>Logout</p>
                </a>
              </li>







        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
