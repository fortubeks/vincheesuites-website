@extends('layouts.almaris.master')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
<div id="top"></div>
<section id="subheader" class="relative jarallax text-light">
    <img src="almaris/images/background/3.webp" class="jarallax-img" alt="">
    <div class="container relative z-index-1000">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Reviews</h1>
                <p class="lead mt-3">
                    What our guests have to say about us
                </p>
                <ul class="crumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Reviews</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="de-overlay"></div>
</section>
<section class="relative text-light jarallax pt100 pb80">
    <div class="de-overlay"></div>
    <img src="almaris/images/background/10.jpg" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <div class="owl-single-dots owl-carousel owl-theme">
                            @foreach($reviews as $review)
                            <div class="item">
                                <span class="d-stars wow fadeInUp">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                                <h3 class="mt-3 mb-3 wow fadeInUp fs-32">{{$review['body'] }}</h3>
                                <span class="wow fadeInUp">{{$review['customer_name'] }}</span>
                            </div>
                            @endforeach
                        </div>
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
        
    });
</script>