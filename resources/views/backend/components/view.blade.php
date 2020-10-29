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
                        @isset($custom)
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$custom->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">phone</label>
                                <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$custom->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">address</label>
                                <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$custom->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">email</label>
                                <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$custom->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">nationality</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>{{$custom->nationality}}</option>
                                </select>
                            </div>
                        @endisset
                        @isset($room)
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Floar</label>
                            <input type="number" class="form-control" id="disabledTextInput" placeholder="{{$room->floar}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">View</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$room->view}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type</label>
                            <select id="disabledSelect" class="form-control">
                                <option>{{$room->type}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select id="disabledSelect" class="form-control">
                                <option>
                                    @if ($room->status == 1)
                                        <span class="badge badge-danger" style="background-color: #dd4b39">Reserved</span>
                                    @else
                                        <span class="badge badge-info" style="background-color: #367fa9">Not reserved</span>
                                    @endif
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Created at</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$room->created_at}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Updated at</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$room->updated_at}}">
                        </div>
                    @endisset
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
