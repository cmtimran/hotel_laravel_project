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
                <li><a href="#"><i class="fa fa-dashboard"></i> Reservations</a></li>
                <li class="active">Dashboard</li>
            </ol>
            </section>
            <div class="container">
            <div class="table-responsive">
                <table class="table table-hover" style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
                    <thead>
                        <tr style="background-color: #222d32;color: white;">
                            <th scope="col">id</th>
                            <th scope="col">check_in</th>
                            <th scope="col">check_out</th>
                            <th scope="col">room_id</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($reservations as $reservation)
                            <tr>
                                <th scope="row">{{$reservation->id}}</th>
                                <td>{{$reservation->check_in}}</td>
                                <td>{{$reservation->check_out}}</td>
                                <td>{{$reservation->room_id}}</td>
                                <td>{{$reservation->updated_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-success main_edit"
                                    value="{{$reservation->id}}">Edit</button>

                                    <button type="button" class="btn btn-danger main_delete"
                                    value="{{$reservation->id}}">
                                    Delete</button>

                                    <button type="button" class="btn btn-primary main_view"
                                    value="{{$reservation->id}}">View</button>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $reservations->links() }}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_4">add new</button>
            </div>
        </div>
    </div>
@include('backend.components.add_reservation')
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
        var url = "{{url('dashboard/reservation/view/')}}"+"/"+id;
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
        var url = "{{url('dashboard/reservation/delete/')}}"+"/"+id;
        $.ajax({
            method: "get",
            url:url,
            success:function(deleted){
                $('#model_2_view').html(deleted);
                $('#exampleModal_2').modal('show');
            }
        });
    });
    $('.main_edit').click(function () {
        let id = $(this).val();
        var url = "{{url('dashboard/reservation/edit/')}}"+"/"+id;
        $.ajax({
            method: "get",
            url:url,
            success:function(edit){
                $('#model_3_view').html(edit);
                $('#exampleModal_3').modal('show');
            }
        });
    });
})
</script>
@endsection
