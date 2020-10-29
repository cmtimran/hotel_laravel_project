@extends('layouts.app')
@section('content')
@include('layouts.header')
    <!-- Main content -->
<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                <h3>{{$book_num}}</h3>
                  <p>Bookings</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $reservations_num}}</h3>
                  <p>Reservations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $customers_num }}</h3>
                  <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ $res_rooms }}</h3>
                  <p>Busy Rooms</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- tables -->
          <!-- rooms -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="background-color:#222d32;color: white;">
                  <h3 class="box-title">Rooms</h3>
                </div>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Floar</th>
          <th>View</th>
          <th>Type</th>
          <th>Status</th>
        </tr>
         @foreach ($avl_rooms as $avl_rooms )
        <tr>
          <td>{{$avl_rooms->id}}</td>
          <td>{{$avl_rooms->floar}}</td>
          <td>{{$avl_rooms->view}}</td>
          <td>{{$avl_rooms->type}}</td>
          <td>{{$avl_rooms->status}}</td>
        </tr>
         @endforeach
      </table>
    </div>

    <!--Customers-->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style="background-color:#222d32;color: white;">
            <h3 class="box-title">Customers</h3>
          </div>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Address</th>
          <th>E-mail</th>
          <th>Nationality</th>
        </tr>
        <tr>
            @foreach ($latest_cust as $latest_cust )
            <tr>
              <td>{{$latest_cust->id}}</td>
              <td>{{$latest_cust->name}}</td>
              <td>{{$latest_cust->phone}}</td>
              <td>{{$latest_cust->address}}</td>
              <td>{{$latest_cust->email}}</td>
              <td>{{$latest_cust->nationality}}</td>
            </tr>
             @endforeach
        </tr>
      </table>
    </div>

    <!--Booking-->
    <div class="row" >
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style="background-color:#222d32; color: white;">
            <h3 class="box-title" >Bookings</h3>
          </div>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Customer_ID</th>
          <th>Room_ID</th>
        </tr>
        <tr>
            @foreach ($latest_book as $latest_book  )
            <tr>
              <td>{{$latest_book->id}}</td>
              <td>{{$latest_book->customer_id}}</td>
              <td>{{$latest_book->room_id}}</td>
            </tr>
             @endforeach
        </tr>
      </table>
    </div>

  </section>
  </div>

@include('layouts.footer')
@endsection
