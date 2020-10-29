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
                <li><a href="#"><i class="fa fa-dashboard"></i> Rooms</a></li>
                <li class="active">Dashboard</li>
            </ol>
            </section>
            <div class="container">
            <div class="table-responsive">
                <table class="table table-hover" style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
                    <thead>
                        <tr style="background-color: #222d32;color: white;">
                            <th scope="col">id</th>
                            <th scope="col">Floar</th>
                            <th scope="col">View</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($rooms as $room)
                            <tr>
                                <th scope="row">{{$room->id}}</th>
                                <td>{{$room->floar}}</td>
                                <td>{{$room->view}}</td>
                                <td>{{$room->type}}</td>
                                <td>
                                    @if ($room->status == 1)
                                        <span class="badge badge-danger" style="background-color: #dd4b39">Reserved</span>
                                    @else
                                        <span class="badge badge-info" style="background-color: #367fa9">Not reserved</span>
                                    @endif
                                </td>
                                <td>{{$room->created_at}}</td>
                                <td>{{$room->updated_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-success main_edit"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    "value="{{$room->id}}">Edit</button>

                                    <button type="button" class="btn btn-danger main_delete"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    "value="{{$room->id}}">
                                    Delete</button>

                                    <button type="button" class="btn btn-primary main_view"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    " value="{{$room->id}}">View</button>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $rooms->links() }}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_4">add new</button>
            </div>
        </div>
    </div>
@include('backend.components.add_room')
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
        var url = "{{url('dashboard/rooms/view/')}}"+"/"+id;
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
        var url = "{{url('dashboard/rooms/delete/')}}"+"/"+id;
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
        var url = "{{url('dashboard/rooms/edit/')}}"+"/"+id;
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
