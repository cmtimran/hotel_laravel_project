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
                <li><a href="#"><i class="fa fa-dashboard"></i> Customers</a></li>
                <li class="active">Dashboard</li>
            </ol>
            </section>
            <div class="container">
            <div class="table-responsive">
                <table class="table table-hover" style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
                    <thead>
                        <tr style="background-color: #222d32;color: white;">
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">phone</th>
                            <th scope="col">address</th>
                            <th scope="col">email</th>
                            <th scope="col">nationality</th>
                            <th scope="col">created_at</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <th scope="row">{{$customer->id}}</th>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->nationality}}</td>
                                <td>{{$customer->created_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-success main_edit"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    "value="{{$customer->id}}">Edit</button>

                                    <button type="button" class="btn btn-danger main_delete"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    "value="{{$customer->id}}">
                                    Delete</button>

                                    <button type="button" class="btn btn-primary main_view"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    " value="{{$customer->id}}">View</button>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $customers->links() }}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_4">add new</button>
            </div>
        </div>
    </div>
@include('backend.components.add')
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
        var url = "{{url('dashboard/customer/view/')}}"+"/"+id;
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
        var url = "{{url('dashboard/customer/delete_2/')}}"+"/"+id;
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
        var url = "{{url('dashboard/customer/edit_2/')}}"+"/"+id;
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
