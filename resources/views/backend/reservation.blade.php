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
            <li><a href="#"><i class="fa fa-dashboard"></i> Reservations</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->

    <div class="container">
        <div class="table-responsive">
        <table class="table table-hover"style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
        <thead>
        <tr style="background-color: #222d32;color: white;">
        <th scope="col">id</th>
        <th scope="col">check_in</th>
        <th scope="col">check_out</th>
        <th scope="col">room_id</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($reservations as $reservation)
        <tr>
        <th scope="row">{{ $reservation->id }}​​​​​​​​​​​​​​​​​​​​​</th>
        <td>{{ $reservation->check_in }}</td>
        <td>{{ $reservation->check_out }}</td>
        <td>{{ $reservation->room_id }}​​​​​​​​</td>
        <td>
        <button type="button"class="btn btn-success"data-toggle="modal"
        data-target="#exampleModal"
        style=" display: block;width: 100%;margin-bottom: 10px;">Edit</button>
        <button type="button"class="btn btn-danger"data-toggle="modal"data-target="#exampleModal_2"
        style="display: block;width: 100%;margin-bottom: 10px;">Delete</button>
        <button type="button"class="btn btn-primary main_view"
        style="display: block;width: 100%;margin-bottom: 10px;"value="{​​​​​​​​{​​​​​​​​$reservation_id}​​​​​​​​}​​​​​​​​">View</button>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        {{ $reservations->links() }}​​​​​​​​
        <button type="button"class="btn btn-primary"data-toggle="modal"data-target="#exampleModal_4">add new</button>
        </div>
        </div>
        </div>

</div>

@include('layouts.footer')
@endsection
