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
            <li><a href="#"><i class="fa fa-dashboard"></i> Bookings</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->


</div>

@include('layouts.footer')
@endsection
