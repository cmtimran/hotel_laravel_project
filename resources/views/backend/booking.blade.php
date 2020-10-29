@extends('layouts.app')
@section('content')
@include('layouts.header')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Booking</a></li>
                <li class="active">Dashboard</li>
            </ol>
            </section>
            <div class="container">
            <div class="table-responsive">
                <table class="table table-hover" style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
                    <thead>
                        <tr style="background-color: #222d32;color: white;">
                            <th scope="col">id</th>
                            <th scope="col">customer_id</th>
                            <th scope="col">room_id</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($bookings as $booking)
                            <tr>
                                <th scope="row">{{$booking->id}}</th>
                                <td>{{$booking->customer->name}}</td>
                                <td>{{$booking->room_id}}</td>

                                <td>

                                    <button type="button" class="btn btn-danger main_delete"
                                    value="{{$booking->id}}">
                                    Delete</button>

                                    <button type="button" class="btn btn-primary main_view"
                                     value="{{$booking->id}}">View</button>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
<div id="model_3_view"></div>
<div id="model_2_view"></div>
<div id="model_1_view"></div>
</div>
@endsection
@section('script')
<script>
    $(function () {
    $('.main_view').click(function () {
        let id = $(this).val();
        var url = "{{url('dashboard/booking/view/')}}"+"/"+id;
        $.ajax({
            method: "get",
            url:url,
            success:function(data){
                $('#model_1_view').html(data);
                $('#exampleModal_3').modal('show');
            }
        });
    });
    $('.main_delete').click(function () {
        let id = $(this).val();
        var url = "{{url('dashboard/booking/delete/')}}"+"/"+id;
        $.ajax({
            method: "get",
            url:url,
            success:function(deleted){
                $('#model_2_view').html(deleted);
                $('#exampleModal_2').modal('show');
            }
        });
    });

})
</script>
@endsection
