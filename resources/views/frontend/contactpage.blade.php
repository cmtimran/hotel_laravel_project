@include('frontend.header')
@section('content')




<section class="section3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d638578.8656879187!2d30.85574933025395!3d30.795411189402884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1603370690272!5m2!1sar!2seg" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
</section>



<div class="last">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav text-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.html">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active_link" href="contact.html">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<section class="reservation">
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Make a Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Date Check In</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date Check Out</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Adults</label>
                                <input type="number" class="form-control" value="1">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Childern</label>
                                <input type="number" class="form-control" value="1">
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Notes</label>
                            <textarea name="message"></textarea>
                        </div>
                        <button type="button" class="btn btn-orange">Reserve Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>  

<div id="scroll-top">
    <i class="fa fa-chevron-up fa-2x"></i> 
</div>  

@endsection
@include('frontend.footer')
