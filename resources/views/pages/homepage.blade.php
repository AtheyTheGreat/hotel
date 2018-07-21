@extends('layouts.default')

@section('content')

<div class="colorlib-loader"></div>

<div id="page">

    @include('partials.navbar')

    <aside id="colorlib-hero">
        @include('partials.homeslide')
    </aside>

@include('partials.reservation')

    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-reception"></i>
                        </span>
                        <h3>24/7 Front Desk</h3>
                        <p>We provide you with 24/7 front desk service, If it's midnight dont be shy come down ask, We are here to answer</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-herbs"></i>
                        </span>
                        <h3>Fun Activities</h3>
                        <p>Have our management arrange you various activities around hulhumale and near by ocean that includes Tours, Excursions, BBQ Nights and Many more</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-car"></i>
                        </span>
                        <h3>Transfer Services</h3>
                        <p>Our Hotel is in Hulhumale which few Kilometers away from the Velana International Airport. We Provide you with transfer service from airport to hotel and vice-versa</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-cheers"></i>
                        </span>
                        <h3>Restaurant &amp; Bar</h3>
                        <p>Recently opened with revamped menu's of different flavour's you can choose from either it's local or International, We got you covered and dont forget that we just introduced the classic Arabic Hooka with many flavours for try!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-rooms" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                    <h2>Rooms &amp; Suites</h2>
                    <p>We have a range of affordable Rooms and Suites you can choose from</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel owl-carousel2">
                        @include('partials.room')
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <a href="rooms">View all rooms <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
    </div>


    @include('partials.food')




@include('partials.scripts')


@stop
