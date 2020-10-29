@extends('layouts.app')
<header>
        <div class="main_img">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="index.html"><img src="frontend/img/logo.png" width="130"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link active_link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link show" data-toggle="modal" data-target="#Modal">Make a Reservation</a>
                        </li>
                    </ul>
                    <button class="btn btn-orange my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#Modal">Make a Reservation</button>
                </div>
            </nav>
            <div class="content">
                <h1>A Luxury Stay</h1>
                <section class="section1">
                    <div class="inside">
                        <h2>Check Availability</h2>
                        <form action="">
                            <ul>
                                <li>
                                    <div class="first">From</div>
                                    <input type="date" >
                                </li>
                                <li>
                                    <div class="first">to</div>
                                    <input type="date">
                                </li>
                                <li class="top_li">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>Adults</div>
                                            <input type="number"  value="0">
                                        </div>
                                        <div class="col-md-4">
                                            <div>Childern</div>
                                            <input type="number"  value="0">
                                        </div>
                                        <div class="col-md-4">
                                            <div>Rooms</div>
                                            <input type="number" value="0">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="first">Room</div>
                                    <input type="text" placeholder="EG.MASYER SUITE">
                                </li>
                                <li class="li_btn">
                                    <input type="submit" value="Go">
                                </li>
                            </ul>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </header>
    