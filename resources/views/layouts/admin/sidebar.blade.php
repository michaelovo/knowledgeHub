<!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p>Alexander Pierce</p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- search form -->
     <form action="#" method="get" class="sidebar-form">
       <div class="input-group">
         <input type="text" name="q" class="form-control" placeholder="Search...">
         <span class="input-group-btn">
               <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
               </button>
             </span>
       </div>
     </form>
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
       <li><a href="#" class="nav-link"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

       <li class="treeview">
         <a href="#">
           <i class="fa fa-folder text-blue"></i> <span>Blogs</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="{{route('post.index')}}"><i class="fa fa-eye"></i> Posts</a></li>
           <li><a href="{{route('category.index')}}"><i class="fa fa-eye"></i> Category</a></li>
           <li><a href="{{route('tags.index')}}"><i class="fa fa-eye"></i> Tags</a></li>
         </ul>
       </li>

       <li class="treeview">
         <a href="#">
           <i class="fa fa-cog text-green"></i> <span>Management</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">


           <li><a href="{{route('user.index')}}"><i class="fa fa-users"></i> Users</a></li>
            <li><a href="{{route('role.index')}}"><i class="fa fa-users"></i> Roles</a></li>

         </ul>
       </li>


       <!--li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li-->
       <li><a href="#"><i class="fa fa-circle-o text-info"></i> <span>Profile</span></a></li>
       <li>

         @if(Auth::guest())
               <a href="{{route('admin.login')}}">Login</a>
         @else

               <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                           <i class="fa fa-power-off text-red"></i>
             {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>

         @endif



       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>
