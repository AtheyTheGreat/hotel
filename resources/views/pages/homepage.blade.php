@extends('layouts.default')

@section('content')

<div class="colorlib-loader"></div>

<div id="page">

    @include('partials.navbar')

    <aside id="colorlib-hero">
        @include('partials.homeslide')
    </aside>

    <div id="colorlib-reservation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 search-wrap">
                    <form method="post" class="colorlib-form">
                    <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="date">Check-in:</label>
                        <div class="form-field">
                          <i class="icon icon-calendar2"></i>
                          <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="date">Check-out:</label>
                        <div class="form-field">
                          <i class="icon icon-calendar2"></i>
                          <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="adults">Adults</label>
                        <div class="form-field">
                          <i class="icon icon-arrow-down3"></i>
                          <select name="people" id="people" class="form-control">
                            <option value="#">1</option>
                            <option value="#">2</option>
                            <option value="#">3</option>
                            <option value="#">4</option>
                            <option value="#">5+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="children">Children</label>
                        <div class="form-field">
                          <i class="icon icon-arrow-down3"></i>
                          <select name="people" id="people" class="form-control">
                            <option value="#">-</option>
                            <option value="#">1</option>
                            <option value="#">2</option>
                            <option value="#">3</option>
                            <option value="#">4</option>
                            <option value="#">5+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <input type="submit" name="submit" id="submit" value="Book Now" href="bookings" class="btn btn-primary btn-block">
                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>

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
                        <p>Our Hotel is Hulhumale which few Kilometers away from the Velana International Airport. We Provide you with transfer service from airport to hotel and vice-versa</p>
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


    <div id="colorlib-dining-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                    <h2>Dining</h2>
                    <p>Come on take a look at the MENU</p>
                </div>
            </div>
            <div class="row">
                <div class="diningbar-flex">
                    <div class="half animate-box">
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="active"><a href="#mains" aria-controls="mains" role="tab" data-toggle="tab">Mains</a></li>
                            <li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
                            <li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
                        </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="mains">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="menu-dish">
                                      <li>
                                        <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$25.99</span>
                                          <h3>Grilled Pork</h3>
                                          <p class="cat">Meat / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-2.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$30.99</span>
                                          <h3>Tuna Roast Source</h3>
                                          <p class="cat">Tuna / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$40.00</span>
                                          <h3>Roast Beef (4 sticks)</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$20.50</span>
                                          <h3>Salted Fried Chicken</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="desserts">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="menu-dish">
                                      <li>
                                        <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$39.90</span>
                                          <h3>Fried Potatoes with Garlic</h3>
                                          <p class="cat">Viggies / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$20.99</span>
                                          <h3>Tuna Roast Source</h3>
                                          <p class="cat">Tuna / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$50.00</span>
                                          <h3>Roast Beef (4 sticks)</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$29.00</span>
                                          <h3>Salted Fried Chicken</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="drinks">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="menu-dish">
                                      <li>
                                        <figure class="image"><img src="images/menu-8.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$25.00</span>
                                          <h3>Fried Potatoes with Garlic</h3>
                                          <p class="cat">Viggies / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-9.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$20.50</span>
                                          <h3>Tuna Roast Source</h3>
                                          <p class="cat">Tuna / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$30.00</span>
                                          <h3>Roast Beef (4 sticks)</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                      <li>
                                        <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
                                        <div class="text">
                                          <span class="price">$29.99</span>
                                          <h3>Salted Fried Chicken</h3>
                                          <p class="cat">Crab / Potatoes / Rice</p>
                                        </div>
                                      </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                 </div><!-- end half -->
                 <div class="half diningbar-img" style="background-image: url(images/cover_img_1.jpg);"></div><!-- end half -->
              </div>
           </div>
      </div>
    </div>




@include('partials.scripts')


@stop
