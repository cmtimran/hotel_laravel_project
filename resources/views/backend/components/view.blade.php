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
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
