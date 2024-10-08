@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

<div id="top"></div>

<section id="section-intro" class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
    <div class="v-center relative">


        <div class="abs abs-centered z-1000 w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="mb-2 wow fadeInUp" data-wow-delay=".3s">Your Gateway to Comfort and Convenience</h1>
                        <p class="lead wow fadeInUp" data-wow-delay=".6s">The perfect getaway is just a click away. Book now and start your adventure!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="abs bottom-0 z-1000 w-100 xs-hide">
            <div class="container-fluid p-lg-5 p-3">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="bg-blur padding40 py-4 wow fadeInDown" data-wow-delay=".9s">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-9">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-3 text-lg-start text-center">
                                            <h3 class="mb-0">Reservation</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6 class="mb-1">Choose Date</h6>
                                                <input type="text" id="date-picker" class="form-control no-border no-bg bg-focus-color text-white fs-20 text-right text-center" name="date" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6>Rooms</h6>
                                                <div class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input type="text" class="no-border no-bg" value="1">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6>Persons</h6>
                                                <div class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input type="text" class="no-border no-bg" value="0">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-end text-center">
                                    <a class="btn-main" href="rooms.html">Check Availability</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(almaris/images/slider/3.jpg)">
                    <div class="sw-overlay op-2"></div>
                </div>
            </div>
            <!-- Slides -->

            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(almaris/images/slider/4.jpg)">
                    <div class="sw-overlay op-2"></div>
                </div>
            </div>                        
            <!-- Slides -->

            <!-- Slides -->
            <div class="swiper-slide">
                <div class="swiper-inner" data-bgimage="url(almaris/images/slider/5.jpg)">
                    <div class="sw-overlay op-2"></div>
                </div>
            </div>                        
            <!-- Slides -->

          </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="d-stars wow fadeInUp">
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                </span>
                <h2 class="mt-3 wow fadeInUp">Welcome to Vinchee Suites</h2>
                <p class="lead wow fadeInUp">Experience the comfort and convenience of modern living at Vinchee Hotel, perfectly situated near Lagos International Airport. Our hotel offers a seamless blend of luxury and affordability, making it an ideal choice for business travelers, vacationers, or anyone in need of a convenient stay. Whether you're catching a flight or exploring the vibrant city, Vinchee Hotel provides the perfect space to relax and recharge.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 text-center wow fadeInUp" data-wow-delay=".0s">
                <img src="almaris/images/misc/4.webp" class="w-100 mb-3 soft-shadow" alt="">
                <h3>Stay</h3>
                <p class="mb-0">Relax in our elegantly designed rooms, offering the perfect blend of comfort and style. Whether you're here for business or leisure, our spacious accommodations provide a tranquil escape, complete with modern amenities to make your stay memorable.</p>
            </div>

            <div class="col-lg-4 text-center wow fadeInUp" data-wow-delay=".3s">
                <img src="almaris/images/misc/11.webp" class="w-100 mb-3 soft-shadow" alt="">
                <h3>Dine</h3>
                <p class="mb-0">Indulge in a culinary experience like no other at our on-site restaurant. Savor a variety of local and international dishes, all prepared by our expert chefs, ensuring a delightful dining experience for every palate, from breakfast to dinner.</p>
            </div>

            <div class="col-lg-4 text-center wow fadeInUp" data-wow-delay=".6s">
                <img src="almaris/images/misc/12.webp" class="w-100 mb-3 soft-shadow" alt="">
                <h3>Offers</h3>
                <p class="mb-0">Discover exclusive deals and packages tailored to enhance your stay. From extended stays to seasonal promotions, we provide special offers that cater to your travel needs, making your visit more affordable and enjoyable.</p>
            </div>
        </div>
    </div>
</section>

<section class="no-top no-bottom section-dark" aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <a class="d-block hover popup-youtube soft-shadow" href="https://www.youtube.com/watch?v=C6rf51uHWJg">
                    <div class="relative overflow-hidden">
                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                            <div class="player wow scaleIn"><span></span></div>
                        </div> 
                        <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                        <img src="almaris/images/background/9.webp" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="section-about">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-12 text-center">
                <div class="wow scaleIn">
                    <h2 class="wow fadeInUp">Our Facilities</h2>
                </div>
            </div>

        </div>

        <div class="row g-4 relative z-2">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".0s">
                <div class="relative p-4 bg-white soft-shadow">
                    <span class="abs w-70px p-3 bg-color d-block">
                        <img src="almaris/images/svg/restaurant-svgrepo-com.svg" class="w-100" alt="">
                    </span>
                    <div class="pl-90">
                        <h4>Restaurant</h4>
                        <p class="mb-0">Indulge in delicious cuisine, offering local and international dishes, expertly crafted for every taste.</p>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="relative p-4 bg-white soft-shadow">
                    <span class="abs w-70px p-3 bg-color d-block">
                        <img src="almaris/images/svg/swimming-pool-svgrepo-com.svg" class="w-100" alt="">
                    </span>
                    <div class="pl-90">
                        <h4>Spa &amp; Massage</h4>
                        <p class="mb-0">Relax with our rejuvenating spa and massage treatments, designed to relieve stress and revitalize you.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="relative p-4 bg-white soft-shadow">
                    <span class="abs w-70px p-3 bg-color d-block">
                        <img src="almaris/images/svg/fitness-gym-svgrepo-com.svg" class="w-100" alt="">
                    </span>
                    <div class="pl-90">
                        <h4>Laundry Service</h4>
                        <p class="mb-0">Experience our efficient laundry service, ensuring your clothes are clean, fresh, and ready for any occasion.</p>
                    </div>
                </div>
            </div>

            
            
        </div>
    </div>

</section>

<section class="no-top relative text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jarallax py-5 soft-shadow">
                    <img src="almaris/images/background/2.webp" class="jarallax-img" alt="">

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="bg-blur p-5 text-center">
                                <div class="owl-single-dots owl-carousel owl-theme">
                                    <div class="item">
                                        <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp"></i>
                                        <h3 class="mb-4 wow fadeInUp fs-32">The experience was great, experience and well oriented staff. The locate is very secure and room are well suited, throughout my stay in Vinchee, its a home away from home.</h3>
                                        <span class="wow fadeInUp">Chi tv</span>
                                    </div>

                                    <div class="item">
                                        <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp"></i>
                                        <h3 class="mb-4 wow fadeInUp fs-32">My partner and I lodged here for a weekend getaway sometimes last year. The place is neat, calm, private. It is suitable for people who want to have private and refreshing getaways. Victoria was responsive and courteous throughout our stay. We'd visit again someday.</h3>
                                        <span class="wow fadeInUp">Phebean Ilesanmi</span>
                                    </div>

                                    <div class="item">
                                        <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp"></i>
                                        <h3 class="mb-4 wow fadeInUp fs-32">Amazing family run boutique hotel in a safe, quiet gated estate less than 3 km from the airport. Not only is it conveniently located, they currently offer a 6am check-in at no extra cost, which is valuable for those who are coming in on an early flight and want to get some rest asap. I stayed in a king room, and I also toured the 2 and 3 bedroom suites that offer a huge living room and kitchen in each. Best of all, their food is delicious and definitely worthy of the last meal before a trip or first meal back in country.</h3>
                                        <span class="wow fadeInUp">Monica</span>
                                    </div>

                                    <div class="item">
                                        <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp"></i>
                                        <h3 class="mb-4 wow fadeInUp fs-32">The apartment is a very neat, quiet environment and well secured. I really enjoyed my stay,most especially the staff and small bar.. I recommend</h3>
                                        <span class="wow fadeInUp">Chibuike Okoli</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</section>

<section id="section-rooms">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="subtitle id-color wow fadeInUp">Our Rooms</div>
                <h2 class="wow fadeInUp mb-4">Accomodation</h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="relative overflow-hidden">
                        <div class="fs-14 p-0 px-3 abs bg-light text-dark fw-600 ms-3 mt-3 z-2">Best Seller</div>
                        <img src="almaris/images/room-landscape/1.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Small D Room</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                2 Guests
                            </span>
                            <span class="mx-2">
                                30 ft
                            </span>
                            <span class="mx-2">
                                ₦31,809/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->
                                    
            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay=".4s">
                    <div class="relative overflow-hidden">
                        <img src="almaris/images/room-landscape/2.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Standard S Room</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                2 Guests
                            </span>
                            <span class="mx-2">
                                35 ft
                            </span>
                            <span class="mx-2">
                                ₦39,800/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->
            
            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay=".5s">
                    <div class="relative overflow-hidden">
                        <div class="fs-14 p-0 px-3 abs bg-light text-dark fw-600 ms-3 mt-3 z-2">Best Seller</div>
                        <img src="almaris/images/room-landscape/3.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Deluxe Room</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                2 Guests
                            </span>
                            <span class="mx-2">
                                35 ft
                            </span>
                            <span class="mx-2">
                                ₦45,290/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->

            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay=".7s">
                    <div class="relative overflow-hidden">
                        <img src="almaris/images/room-landscape/4.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Deluxe Queen Suite</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                4 Guests
                            </span>
                            <span class="mx-2">
                                60 ft
                            </span>
                            <span class="mx-2">
                                ₦55,900/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->

            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay=".9s">
                    <div class="relative overflow-hidden">
                        <div class="fs-14 p-0 px-3 abs bg-light text-dark fw-600 ms-3 mt-3 z-2">Best Seller</div>
                        <img src="almaris/images/room-landscape/5.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Superior King Room</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                4 Guests
                            </span>
                            <span class="mx-2">
                                70 ft
                            </span>
                            <span class="mx-2">
                                ₦69,998/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->

            <!-- room begin -->
            <div class="col-lg-4 col-sm-6">
                <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay="1.1s">
                    <div class="relative overflow-hidden">
                        <img src="almaris/images/room-landscape/6.jpg" class="img-fluid hover-scale-1-1" alt="">
                    </div>
                    <div class="p-3 pb-1 w-100 text-center">
                        <h4 class="mt-2 mb-0">Deluxe King Studio</h4>
                        <div class="text-center fs-14 mb-3">
                            <span class="mx-2">
                                2 Guests
                            </span>
                            <span class="mx-2">
                                90 ft
                            </span>
                            <span class="mx-2">
                                ₦69,998/night
                            </span>
                        </div>
                    </div>
                </div>
                <a class="btn-main w-100" href="{{route('home')}}">Book Now</a>
            </div>
            <!-- room end -->
        </div>
    </div>
</section>

<section class="relative z-4 lines-deco no-top" style="background-size: cover; background-repeat: no-repeat;">
    <div class="container" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row justify-content-center" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-8" style="background-size: cover; background-repeat: no-repeat;">
                <div class="mt-70" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row g-0" style="background-size: cover; background-repeat: no-repeat;">
                        

                        <div class="col-md-12 text-center" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="text-light p-4 h-100 wow fadeInRight bgcustom animated" data-bgcolor="#181818" data-wow-delay=".2s" style="background-color: rgb(24, 24, 24); background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                <div class="de_count fs-15 wow fadeInRight animated" data-wow-delay=".6s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    <a class="btn-main no-bg" href="{{route('rooms.index')}}">More Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-top no-bottom">
    <div class="container relative z-2">
        <div class="row g-4">
            <div class="col-lg-8 offset-lg-2 mb-4 text-center">
                <div class="subtitle id-color wow fadeInUp mb-3 animated" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">Our Instagram</div>
                <h2 class="wow fadeInUp">@VincheeSuites</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="row g-0">
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/1.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/2.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/3.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/4.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0">
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/5.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/6.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/7.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="d-block hover relative overflow-hidden text-light">
                            <img src="almaris/images/gallery-square/8.webp" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<!-- content close -->
@endsection
<script>
    window.addEventListener('load', function() {
        ₦('#reservationForm').on('submit', function(event) {
            // Create a new hidden input and append it to the form
            var startValue = ₦('input[name="daterangepicker_start"]').val();
            ₦('<input>').attr({
                type: 'hidden',
                name: 'checkin_date',  // This should match the name attribute of the external input
                value: startValue
            }).appendTo('#reservationForm');

            var endValue = ₦('input[name="daterangepicker_end"]').val();
            ₦('<input>').attr({
                type: 'hidden',
                name: 'checkout_date',  // This should match the name attribute of the external input
                value: endValue
            }).appendTo('#reservationForm');
        });
    });
</script>