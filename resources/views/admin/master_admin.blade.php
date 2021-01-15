<!DOCTYPE html>
<html lang="en">

<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title id="header">Futsal_ma | @yield('title')</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <router-link to="/dashboard" class="nav-link"> Dashboard </router-link>
       
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" >
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

</nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <i class="fas fa-award"> </i>
      <span class="brand-text font-weight-light">Futsal ma</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">

                                         <router-link to="/dashboard" class="nav-link">




                                                        <i class="nav-icon fas fa-heartbeat"></i>
                                                        <p> Dashboard </p>
                                                            </router-link>
              </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
              <p>
             Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> 
            <ul class="nav nav-treeview">
              
              <li class="nav-item">

                                         <router-link to="/Players" class="nav-link">




                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Player Managments</p>
                                                            </router-link>
              </li>

              <li class="nav-item">

                                         <router-link to="/Futsal_Admins" class="nav-link">




                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Futsal Managments</p>
                                                            </router-link>
              </li>

              <li class="nav-item">
                                           <router-link to="/booking_managment" class="nav-link"> 
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Booking Managment</p>
                                              </router-link>
              </li>
            </ul>
          </li>

       </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- bottom nav bar -->
      <div class="nav-item-log mt-5 pb-2" style="width:235px; position: fixed; bottom:5%; overflow: hidden; ">
              <a class="nav-link btn btn-primary " href="{{ url('index') }}">
                   <i class="fas fa-reply mr-2 text-white "></i>
                    <span style="color: white;">  Home Page</span>
              </a>
      </div>

      <div class="nav-item-log mt-5 pb-2" style="width:235px; position: fixed; bottom:0; overflow: hidden; ">
             <!--  logout  -->
              <a class="nav-link btn btn-danger " href="{{ route('logout') }}"
             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-reply mr-2 text-white "></i>
                <span style="color: white;">  Logout</span>
              </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                     {{ csrf_field() }}
                     </form>
          </div>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

                                     <router-view>
                                       
                                       
                                     </router-view>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- ./wrapper -->


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
