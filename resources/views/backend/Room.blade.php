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
<li><a href="#"><i class="fa fa-dashboard"></i> Rooms</a></li>
<li class="active">Dashboard</li>
</ol>
</section>
<div class="container">
<div class="table-responsive">
<table class="table table-hover"style="background-color: #fff;box-shadow: 1px 0px 2px;margin-top: 22px;">
<thead>
<tr style="background-color: #222d32;color: white;">
<th scope="col">id</th>
<th scope="col">floar</th>
<th scope="col">view</th>
<th scope="col">type</th>
<th scope="col">status</th>

</tr>
</thead>
<tbody>
        @foreach ($Room as $room)
        <tr>
        <th scope="row">​​​​​​​​{{$room->id}}</th>
        <td>​​​​​​​​​​​​​{{$room->floar}}​​​​​​​​​​​​​</td>
        <td>{{​​​​​​​​​​​$room->view}}</td>
        <td>{{​​​​​​​​$room->type}}​​​​​​​​</td>
        <td>​​​​​​{{$room->status}}​​​​​​​​</td>

        <td>

    

        <button type="button"class="btn btn-success"data-toggle="modal"
        data-target="#exampleModal"
        style="
            display: block;
            width: 100%;
            margin-bottom: 10px;
        ">Edit</button>
        <button type="button"class="btn btn-danger"data-toggle="modal"data-target="#exampleModal_2"
            style="
                display: block;
                width: 100%;
                margin-bottom: 10px;
                ">Delete</button>
               <button type="button"class="btn btn-primary main_view"
             style="
                display: block;
                width: 100%;
                margin-bottom: 10px;
           " value="{{​​​​​​​​$room->id}}​​​​​​​​">View</button>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
       {{ ​​​​​​​​​​​​​​​$Room->links()​​​​​​​​}}
        <button type="button"class="btn btn-primary"data-toggle="modal"data-target="#exampleModal_4">add new</button>
        </div>
        </div>
        </div>


@endsection    
