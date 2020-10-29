@extends('layouts.app')
@include('layouts.header')
@section('content')   
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
              <h3>150</h3>
              <p>New Orders</p>
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
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p>Bounce Rate</p>
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
              <h3>44</h3>
              <p>User Registrations</p>
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
              <h3>65</h3>
              <p>Unique Visitors</p>
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
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
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
          <tr>
            <td>183</td>
            <td>2</td>
            <td>SeaView</td>
            <td>Deulex Suite</td>
            <td><span class="label label-success">0</span></td>
          </tr>
          <tr>
            <td>219</td>
            <td>1</td>
            <td>No SeaView</td>
            <td>Twin Room</td>
            <td><span class="label label-danger">1</span></td>
          </tr>
          <tr>
            <td>657</td>
            <td>3</td>
            <td>SeaView</td>
            <td>Deulex Room</td>
            <td><span class="label label-success">0</span></td>
          </tr>
          <tr>
            <td>175</td>
            <td>4</td>
            <td>SeaView</td>
            <td>Deulex Room</td>
            <td><span class="label label-success">0</span></td>
          </tr>
          <tr>
            <td>627</td>
            <td>1</td>
            <td>SeaView</td>
            <td>Deulex Suite</td>
            <td><span class="label label-danger">1</span></td>
          </tr>
          <tr>
            <td>117</td>
            <td>4</td>
            <td>No SeaView</td>
            <td>Twin Room</td>
            <td><span class="label label-danger">1</span></td>
          </tr>
        </table>
      </div>
      
      <!--Customers-->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="background-color:#222d32;color: white;">
              <h3 class="box-title">Customers</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
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
            <td>12</td>
            <td>Heba</td>
            <td>0123456789</td>
            <td>12 street</td>
            <td>Heba@web.com</td>
            <td>Egypt</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Ahmed</td>
            <td>0123456899</td>
            <td></td>
            <td>Ahmed@web.com</td>
            <td>Egypt</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Mohammed</td>
            <td>0123456789</td>
            <td>18 street</td>
            <td>Mohammed@web.com</td>
            <td>Sryia</td>
          </tr>
          <tr>
            <td>112</td>
            <td>Aya</td>
            <td>0123475896</td>
            <td>25 street</td>
            <td>Aya@web.com</td>
            <td>China</td>
          </tr>
          <tr>
            <td>121</td>
            <td>mai</td>
            <td>0123456789</td>
            <td>121 street</td>
            <td>mai@web.com</td>
            <td>lebnon</td>
          </tr>
          <tr>
            <td>81</td>
            <td>mostafa</td>
            <td>0123456789</td>
            <td>123 street</td>
            <td>Mos@web.com</td>
            <td>Dubai</td>
          </tr>
        </table>
      </div>

      <!--Booking-->
      <div class="row" >
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="background-color:#222d32; color: white;">
              <h3 class="box-title" >Bookings</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Customer_ID</th>
            <th>Room_ID</th>
          </tr>
          <tr>
            <td>1</td>
            <td>20</td>
            <td>157</td>
          </tr>
          <tr>
            <td>2</td>
            <td>53</td>
            <td>214</td>
          </tr>
          <tr>
            <td>3</td>
            <td>3</td>
            <td>210</td>
          </tr>
          <tr>
            <td>4</td>
            <td>80</td>
            <td>120</td>
          </tr>
          <tr>
            <td>7</td>
            <td>10</td>
            <td>117</td>
          </tr>
          <tr>
            <td>6</td>
            <td>8</td>
            <td>913</td>
          </tr>
        </table>
      </div>
    </div>
  </div>