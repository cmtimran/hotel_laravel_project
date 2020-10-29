@include('frontend.header')


<section class="section4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-1.png" alt="">
                        </div>
                        <h3>Infinity Pool</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-2.png" alt="">
                        </div>
                        <h3>Fitness Area</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-3.png" alt="">
                        </div>
                        <h3>Shuttle</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-4.png" alt="">
                        </div>
                        <h3>Restaurant</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-5.png" alt="">
                        </div>
                        <h3>City Guide</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-6.png" alt="">
                        </div>
                        <h3>Day Trips</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-7.png" alt="">
                        </div>
                        <h3>Spa& Sauna</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="frontend/img/services/service-8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-8.png" alt="">
                        </div>
                        <h3>Free Diving</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 hidden">
                <div class="card">
                    <img src="frontend/img/services/service-9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="imgees">
                            <img src="frontend/img/services/service-icon-9.png" alt="">
                        </div>
                        <h3>Private Guide</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section5">
    <div class="row">
        <div class="col-md-6">
            <img src="frontend/img/services/kid-img.png" alt=".." width="100%" height="100%">
        </div>
        <div class="col-md-6 bottom_sm margin">
            <h5>A MEMORABLE HOLLIDAY</h5>
            <h2>Activities For Childern</h2>
            <p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="btn btn-orange my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#Modal">Make a Reservation</button>
        </div>
    </div>
</section>




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
@include('frontend.footer')
