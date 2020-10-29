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
                @isset($delete_custom->id)
                    <form method="POST" action="{{route('delete',$delete_custom->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                    </form>
                @endisset
                @isset($delete_room->id)
                    <form method="POST" action="{{route('delete_room',$delete_room->id)}}" style="display: inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                    </form>
                @endisset
                @isset($delete_booking->id)
                    <form method="POST" action="{{route('delete_booking',$delete_booking->id)}}" style="display: inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                    </form>
                @endisset
                @isset($delete_reservation->id)
                    <form method="POST" action="{{route('delete_reservation',$delete_reservation->id)}}" style="display: inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger delete-user" value="Delete reservation">
                    </form>
                @endisset
            </div>
        </div>
    </div>
  </div>
