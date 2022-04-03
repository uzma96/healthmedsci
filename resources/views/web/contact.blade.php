@extends('web.layout')
@section('content')
<div class="header-space"></div>
            <!-- Page Header Start Here -->
            <section class="page-header">
                <div class="product-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="p-tb-10">Contact US</h2>
                            </div>
                            <div class="col-md-3 m-t-15">
                                <a href="/">Home</a> <i class="fa fa-angle-double-right"></i>
                                <a href="contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End Here -->
            <!-- Main Section Start Here -->
            <div id="main">
                <!-- Contact Section Start Here -->
                <section id="contact-us" class="contact-section section-padding">
                    <div class="container form-section">
                        <div class="row">
                            <div class="contact-detail col-md-6 col-xs-12 wow fadeUp">
                                <h3>Contact Information</h3>
                                <ul class="contact-detail">
                                    <li>
                                        <h6>Comtact Hours</h6>
                                        <p><i class="fa fa-support"></i>Our support Hotline is available 24 Hours a day : +88 01796253050 </p>
                                        <p><i class="fa fa-clock-o"></i>Monday-Friday : 9am to 6pm, - Saturday : 10am to 2pm
                                    </li>
                                    <li>
                                        <h6>Address </h6>
                                        <p><i class="fa fa-map-marker"></i>Address: 3/1, Block #F, Lalmatia, Dhaka-1207,  Bangladesh</p>
                                    </li>
                                    <li>
                                        <h6>E-mail</h6>
                                        <p><i class="fa fa-envelope-o"></i>info@healthmedsci.org</p>
                                    </li>
                                    <li>
                                        <h6>Cell Phone</h6>
                                        <p><i class="fa fa-phone"></i>+88 01968856402</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="form col-md-6 contact-form wow fadeUp">
                                <h3>Send Inquiry</h3>
                                <form class="form-horizontal" id="contact">
                                    <!-- IF MAIL SENT SUCCESSFULLY -->
                                    <p class="success alert alert-success"><i class="fa fa-check"></i> Your message has been sent successfully. </p>

                                    <!-- IF MAIL SENDING UNSUCCESSFULL -->
                                    <p class="error alert alert-danger"><i class="fa fa-times"></i> E-mail must be valid and message must be longer than 1 character. </p>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input  class="form-control" id="cf-name" type="text" name="cf-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="cf-email" type="email" name="cf-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="cf-subject" type="text" name="cf-subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 ">
                                            <textarea class="form-control custom-control" id="cf-message" rows="4" name="cf-message" placeholder="How can i help? "></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <button type="submit" id="cf-submit" name="submit" class="btn-theme btn">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Section end Here -->
                <!-- Map Section Start Here -->
                <!-- Map Section Start Here -->
            </div>
            @stop