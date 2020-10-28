
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo rounded-circle">
          <span class="logo-mini "><b>AAH</b>dashboard</span>
          <span class="logo-lg"><b>Hotel</b> dashboard</span>
        </a>
        <nav class="navbar navbar-static-top">
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('backend/img/logo.png')}}" class="user-image " alt="User Image">
                  <span class="hidden-xs">Hotel Booking</span>
                </a>
                <ul class="dropdown-menu" ">
                  <li class="user-header">
                    <img src="{{asset('backend/img/logo.png')}}" class="img-circle" alt="User Image">
                    <p>
                      AAH - Web Developers
                      <small>Member since OCT. 2020</small>
                    </p>
                  </li>
                </ul>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right" style="padding-top:7px;padding-right:5px;">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
</div>


<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend/img/logo.png')}}" class="img-thumbnail" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="padding-top:10px;">Hotel Booking</p>
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
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>pages</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i>Home</a></li>
            <li><a href="Reservations.html"><i class="fa fa-circle-o"></i>Reservations</a></li>
            <li><a href="Rooms.html"><i class="fa fa-circle-o"></i>Rooms</a></li>
            <li><a href="Customers.html"><i class="fa fa-circle-o"></i>Customers</a></li>
            <li><a href="Bookings.html"><i class="fa fa-circle-o"></i>Bookings</a></li>
          </ul>
        </li>
    </section>
  </aside>
