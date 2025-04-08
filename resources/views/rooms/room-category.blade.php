@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section class="pt80 sm-pt-40 no-bottom">
        <div class="owl-custom-nav menu-float" data-target="#gallery-carousel">
            <a class="btn-next"></a>
            <a class="btn-prev"></a>

            <div id="gallery-carousel" class="owl-3-cols-autowidth owl-carousel owl-theme">
                <img src="{{url('almaris/images/room/'.$roomCategory['id'].'/1.jpg')}}" class="h-600px" alt="">
                <img src="{{url('almaris/images/room/'.$roomCategory['id'].'/2.jpg')}}" class="h-600px" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-4 gx-5">
                <div class="col-lg-7">
                    <h2>{{$roomCategory['name']}}</h2>

                    <div class="d-flex">
                        <div class="relative me-4">
                            <img src="{{url('almaris/images/icons/guests.png')}}" class="w-20px abs mt-1" alt="">
                            <p class="ml30 text-dark fw-500">2 Guests</p>
                        </div>

                        <div class="relative me-4">
                            <img src="{{url('almaris/images/icons/size.png')}}" class="w-20px abs mt-1" alt="">
                            <p class="ml30 text-dark fw-500">35 Feets Size</p>
                        </div>

                        <div class="relative me-4">
                            <img src="{{url('almaris/images/icons/bed.png')}}" class="w-20px abs mt-1" alt="">
                            <p class="ml30 text-dark fw-500">1 King Bed</p>
                        </div>
                    </div>

                    <p>Experience affordable luxury at Vinchee Suites, Lagos</p>

                    <div class="spacer-single"></div>

                    <h3 class="mb-2">Room Amenities</h3>
                    <div class="row g-2">
                        <div class="col-lg-4 col-6 fadeInRight" data-wow-delay=".2s">
                            <div class="p-3 relative">
                                <img src="{{url('almaris/images/icons/tv.png')}}" class="w-30px" alt="">
                                <p class="absolute abs-middle ml50 text-dark fw-500">Cable TV</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 fadeInRight" data-wow-delay=".2s">
                            <div class="p-3 relative">
                                <img src="{{url('almaris/images/icons/shower.png')}}" class="w-30px" alt="">
                                <p class="absolute abs-middle ml50 text-dark fw-500">Shower</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 fadeInRight" data-wow-delay=".2s">
                            <div class="p-3 relative">
                                <img src="{{url('almaris/images/icons/wifi.png')}}" class="w-30px" alt="">
                                <p class="absolute abs-middle ml50 text-dark fw-500">Free WiFi</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6 fadeInRight" data-wow-delay=".2s">
                            <div class="p-3 relative">
                                <img src="{{url('almaris/images/icons/refrigerator.png')}}" class="w-30px" alt="">
                                <p class="absolute abs-middle ml50 text-dark fw-500">Refrigerator</p>
                            </div>
                        </div>

                    </div>

                    <div class="spacer-single"></div>

                    <h3 class="mb-2">Room Features</h3>
                    <ul class="ul-style-2">
                        <li><strong>Wi-Fi</strong>: Complimentary High-Speed Wi-Fi</li>
                        <li><strong>Climate Control</strong>: Individual Air Conditioning and Heating</li>
                        <li><strong>Entertainment</strong>: Flat-Screen TV with Cable</li>
                        <!--<li><strong>Workspace</strong>: Ergonomic Work Desk and Chair</li>
                        <li><strong>Safety</strong>: In-Room Safe</li>
                        <li><strong>Communication</strong>: Direct-Dial Telephone</li>
                        <li><strong>Convenience</strong>: Alarm Clock, Iron, and Ironing Board</li> -->
                    </ul>
                </div>


                <div class="col-lg-5">
                    <div class="bg-dark text-light p-5">
                        <form id="reservationForm" method="get" action="https://venushotelsoftware.com/booking-engine/available-categories">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="mb-4">Reserve</h3>
                                </div>

                                <div>
                                    From
                                    <h3 class="d-inline"><span id="rate">{{$roomCategory['rate']}}</span></h3>
                                    /night
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-12">
                                    <h6 class="mb-2">Choose Date</h6>
                                    <input type="text" id="date-picker" class="form-control no-bg bg-focus-color text-light" name="date" value="">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center ">
                                        <h6>Adult</h6>
                                        <div class="de-number">
                                            <span class="d-minus">-</span>
                                            <input type="text" class="no-border no-bg" value="1">
                                            <span class="d-plus">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center ">
                                        <h6>Children</h6>
                                        <div class="de-number">
                                            <span class="d-minus">-</span>
                                            <input type="text" class="no-border no-bg" value="0">
                                            <span class="d-plus">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center ">
                                        <h6>Rooms</h6>
                                        <div class="de-number">
                                            <span class="d-minus">-</span>
                                            <input type="text" class="no-border no-bg" value="1" name="rooms">
                                            <span class="d-plus">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>



                            <div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="mb-4">Total Cost</h3>
                                    </div>

                                    <div>
                                        <h3 class="d-inline"><span id="total">{{$roomCategory['rate']}}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-main w-100" style="border: 1px white solid;">Book Your Stay</button>
                            <input type="hidden" name="category_id" value="{{$roomCategory['id']}}">
                            <input type="hidden" name="hotel_id" value="{{hotelId()}}">
                        </form>
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
        $('#reservationForm').on('submit', function(event) {
            // Create a new hidden input and append it to the form
            var startValue = $('input[name="daterangepicker_start"]').val();

            $('<input>').attr({
                type: 'hidden',
                name: 'checkin_date', // This should match the name attribute of the external input
                value: startValue
            }).appendTo('#reservationForm');

            var endValue = $('input[name="daterangepicker_end"]').val();
            $('<input>').attr({
                type: 'hidden',
                name: 'checkout_date', // This should match the name attribute of the external input
                value: endValue
            }).appendTo('#reservationForm');
        });
        //update the total cost based on the number of rooms and rate
        $('input[name="rooms"]').on('input', function() {
            var rate = parseFloat($('#rate').text());
            //alert(rate);
            var rooms = parseInt($(this).val()) || 1; // Default to 1 if input is empty or invalid
            var total = rate * rooms;
            $('#total').text(total.toFixed(2)); // Update the total cost display
        });
    });
</script>