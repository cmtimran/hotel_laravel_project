<div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            </div>
        </div>
    </div>
</div>
