<div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @isset($edit_custom)
                    <form method="POST" action="{{route('edit_customer',$edit_custom->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$edit_custom->name}}">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" value="{{$edit_custom->phone}}">
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{$edit_custom->email}}">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{$edit_custom->address}}">
                            @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">nationality</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="nationality">
                                <option>{{$edit_custom->nationality}}</option>
                                <option>Egypt</option>
                                <option>Saudi Arabia</option>
                                <option>palestine</option>
                                <option>morocco</option>
                                <option>other</option>
                            </select>
                            @error('nationality')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endisset
                @isset($edit_room)
                    <form method="POST" action="{{route('edit_room',$edit_room->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Floar</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="floar" value="{{$edit_room->floar}}">
                            @error('floar')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">View</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="view" value="{{$edit_room->view}}">
                            @error('view')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="type">
                                <option>{{$edit_room->type}}</option>
                                <option>Single</option>
                                <option>Douple</option>
                            </select>
                            @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="status" >
                                @if ($edit_room->status == 1)
                                <option value="1">Reserved</option>
                                <option value="0">Non reserved</option>
                                @else
                                <option value="0">Non reserved</option>
                                <option value="1">Reserved</option>
                                @endif</option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endisset
                @isset($edit_reservation)
                    <form method="POST" action="{{route('edit_reservation',$edit_reservation->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">check in</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="check_in" value="{{$edit_reservation->check_in}}">
                            @error('check_in')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">check out</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="check_out" value="{{$edit_reservation->check_out}}">
                            @error('check_out')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">room id</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="room_id" value="{{$edit_reservation->room_id}}">
                            @error('room_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endisset
            </div>
        </div>
    </div>
</div>
