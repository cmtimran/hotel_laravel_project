@extends('layouts.app')

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
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModal"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    ">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_2"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    ">Delete</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_3"
                                    style="
                                    display: block;
                                    width: 100%;
                                    margin-bottom: 10px;
                                    ">View</button>
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
          <!-- Modal Edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">nationality</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal Delete-->
  <div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModal_2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal_2Label">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <h5>Are you sure you want to delete</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
  </div>

<!-- Modal view-->
<div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModal_3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal_3Label">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone number</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">address</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="address">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">nationality</label>
                            <select id="disabledSelect" class="form-control">
                                <option>egypt</option>
                            </select>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
