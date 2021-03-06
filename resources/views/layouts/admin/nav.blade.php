<header class="main-header">
   <!-- Logo -->
   <a href="#" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini"><b>A</b>LT</span>
     <!-- logo for regular state and mobile devices -->
     <span class="logo-lg"><b>Knowledge</b> Hub</span>
   </a>
   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top">
     <!-- Sidebar toggle button-->
     <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
       <span class="sr-only">Toggle navigation</span>
     </a>

     <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">

         <li class="dropdown user user-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <img src="{{asset('admin/dist/img/ovo.jpeg')}}" class="user-image" alt="User Image">
             <span class="hidden-xs">{{Auth::user()->name}}</span>
           </a>
           <ul class="dropdown-menu">
             <!-- User image -->
             <li class="user-header">
               <img src="{{asset('admin/dist/img/ovo.jpeg')}}" class="img-circle" alt="User Image">

               <p>
                 {{Auth::user()->name}} - Web Developer
                 <small>Member since Nov. {{Auth::user()->created_at->toformattedDateString()}}</small>
               </p>
             </li>
             <!-- Menu Body -->

             <!-- Menu Footer-->
             <li class="user-footer">
               <div class="pull-left">
                 <a href="#" class="btn btn-default btn-flat">Profile</a>
               </div>
               <div class="btn btn-default btn-flat pull-right">



                 <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             <i class="fa fa-power-off text-red"></i>
               Sign out
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
                 <!--a href="#" class="btn btn-default btn-flat">Sign out</a-->
               </div>
             </li>
           </ul>
         </li>
         <!-- Control Sidebar Toggle Button -->
         <li>
           <!--a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a-->
         </li>
       </ul>
     </div>
   </nav>
 </header>
