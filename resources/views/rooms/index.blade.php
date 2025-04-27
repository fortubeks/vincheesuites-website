@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section id="subheader" class="relative jarallax text-light">
        <img src="almaris/images/background/3.webp" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1>Rooms</h1>
                    <ul class="crumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Rooms</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section class="relative lines-deco">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="subtitle id-color wow fadeInUp">Our Rooms</div>
                    <h2 class="wow fadeInUp mb-4">Accomodation</h2>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($roomCategories as $index => $room)
                @php
                $delay = number_format(0.3 + ($index * 0.2), 1);
                @endphp
                <!-- room begin -->
                <div class="col-lg-4 col-sm-6">
                    <div class="bg-light hover relative text-center wow fadeInUp" data-wow-delay="{{ $delay }}s">
                        <div class="relative overflow-hidden">
                            <!-- <div class="fs-14 p-0 px-3 abs bg-light text-dark fw-600 ms-3 mt-3 z-2">Best Seller</div> -->
                            <img src="{{'https://venushotelsoftware.com/storage/'.$room['image']}}" class="img-fluid hover-scale-1-1" alt="">
                        </div>
                        <div class="p-3 pb-1 w-100 text-center">
                            <h4 class="mt-2 mb-0">{{ $room['name'] ?? 'Room Name' }}</h4>
                            <div class="text-center fs-14 mb-3">
                                <span class="mx-2">2 Guest</span>
                                <span class="mx-2">30 ft+</span>
                                <span class="mx-2">₦{{ number_format($room['rate'] ?? 31809) }}/night</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn-main w-100" href="{{ route('rooms.show',$room['id']) }}">Book Now</a>
                </div>
                <!-- room end -->
                @endforeach
            </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection
<script>
    window.addEventListener('load', function() {

    });
</script>