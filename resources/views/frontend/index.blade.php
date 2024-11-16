@extends('frontend.layouts.master')

@section('content')
    @include('frontend.layouts.sidenav')



    <div id="colorlib-main">
        <div class="hero-wrap js-fullheight" style="background-image: url(/frontend/assets/images/pangasinan-gulf-bg-1.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    <div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
                    <div class="desc">
                        <h2 class="subheading">Hello there, I'm</h2>
                        <h1 class="mb-4">Emilie Sumallo</h1>
                        <p class="mb-4">I am A Cloud DB Engineer / Laravel PHP Developer / Software Engineer, behind the
                            pangasinan gulf in lingayen, where I started to dream to be part of IT Industry, my journey was
                            never easy I often had an obstacle in my way to be a great developer. I usually like to attend
                            seminars related to the kin aspect that has related to the my goals.
                            PHP Developer collaborates with multiple teams to accomplish various projects. Successfully
                            developed
                            custom solutions to solve challenges and engineered designs to meet predetermined functionality
                            goals. Experience with Laravel PHP, Ecommerce & Healthcare and business continuity solutions.
                            Exceptional written and verbal communication skills as well as personal accountability
                        </p>
                        <p><a href="{{ route('about') }}" class="btn-custom">More About Me <span
                                    class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Articles</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                            is a paradisematic country.</p>
                    </div>
                </div>
                @include('frontend.layouts.tile')
            </div>
        </section>
    @endsection
