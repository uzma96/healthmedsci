@extends('web.layout')
@section('content')

<div class="header-space"></div>
            <!-- Page Header Start Here -->
            <section class="page-header">
                <div class="product-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="p-tb-10">Testimonial</h2>
                            </div>
                            <div class="col-md-3 m-t-15">
                                <a href="/">Home</a> <i class="fa fa-angle-double-right"></i>
                                <a href="#">Testimonial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Section Start Here -->
            <div id="main" style="margin-top:50px">
                <!-- Contact Section Start Here -->
                <section id="contact-us" class="contact-section section-padding">
                    <div class="container form-section">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                @php
                                $x=true;
                                @endphp
                                @foreach($testimonials as $t)
                                    <blockquote class={{$x?"blockquote-reverse":''}}>
                                        <p>{{$t->statement}}</p>
                                        <small>{{$t->user}} in <cite title="Source Title">Healthmed Science</cite></small>
                                    </blockquote>
                                    @php
                                        $x= !$x;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Section end Here -->
                <!-- Map Section Start Here -->
                <!-- Map Section Start Here -->
            </div>
            <!-- Satisfied Clients Section Start Here-->

            <!-- Satisfied Client Section End Here-->

            <!-- purchase now Start Here -->

            @stop