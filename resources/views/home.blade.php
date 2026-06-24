@extends('layoutTemplate.main')
@section('main-container')

<!-- slider section -->
<section class="slider_section">
    <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row parent-detail-box1">
                            <div class="col-lg-7 order-2 order-lg-1 parent-detail-box">
                                <div class="detail-box">
                                    <h1>
                                        Step Up Your Style <br>
                                        with Pickify
                                    </h1>
                                    <p>
                                        Discover the perfect blend of comfort and fashion with our exclusive collection
                                        of shoes and clothing. Whether you're looking for everyday essentials or
                                        standout pieces, Pickify has something for everyone. Shop the latest trends and
                                        get your style delivered to your doorstep.
                                    </p>
                                    </p>
                                    <a href="{{ url('/contact_us') }}">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-1 order-lg-2 parent-img-box">
                                <div class="img-box">
                                    <img style="width:600px" src="images/image3.jpeg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- end slider section -->
</div>
<!-- end hero area -->

<!-- shop section -->

<section class="shop_section layout_padding" id="shop">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Products
            </h2>
        </div>
        <div class="row">
            @foreach ($product as $item )
            <!---$product is the variable that is being passed from the HomeController-->

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <div class="img-box">
                        <img src="images/database_img/{{$item->image}}" alt="">
                    </div>
                    <div class="text-center">
                        <h6>{!!Str::Words($item->product_name, 4)!!}</h6>
                        <h6>Price: Rs {{ $item->price }}</h6>
                    </div>

                    <div class="details-add-to-cart mt-4">
                        <a class="btn btn-success text-white" href="{{url('product_details', $item->id)}}">Details</a>
                        <a class="btn add-to-cart" href="{{ url('add_to_cart', $item->id) }}">Add to Cart</a>


                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="btn-box">
            <a href="">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- end shop section -->

<!-- Testimonial- section -->

<section class="client_section layout_padding" id="testimonial_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Testimonial</h2>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimonials as $index => $testimonial)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="box">
                        <div class="client_info">
                            <div class="client_name">
                                <h5>{{ $testimonial->user->name }}</h5>
                                <h6>Registered User</h6>
                                <div class="testimonial-rating-display">
                                    @for ($i = 1; $i <= 5; $i++) <span
                                        class="star {{ $testimonial->rating <= $i ? 'filled' : '' }}">★</span>
                                        @endfor
                                </div>
                            </div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p>{{ $testimonial->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial form  -->
<div class="testimonial-form-container" style="padding-bottom: 2.8rem">
    <div class="testimonial-form-box">

        @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
        @endif

        <h2>Share Your Experience</h2>

        <form action="/submit_testimonial" method="POST">
            @csrf

            <!-- Star Rating Field -->
            <div class="star-rating">
                <input type="radio" name="rating" id="star5" value="5"><label for="star5" title="5 stars">★</label>
                <input type="radio" name="rating" id="star4" value="4"><label for="star4" title="4 stars">★</label>
                <input type="radio" name="rating" id="star3" value="3"><label for="star3" title="3 stars">★</label>
                <input type="radio" name="rating" id="star2" value="2"><label for="star2" title="2 stars">★</label>
                <input type="radio" name="rating" id="star1" value="1"><label for="star1" title="1 star">★</label>
            </div>

            <!-- Testimonial Text -->
            <div>
                <textarea name="content" class="testimonial-textarea" placeholder="Write your testimonial here..."
                    required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="testimonial-submit-btn">Submit Testimonial</button>
        </form>
    </div>
</div>



<!-- contact section -->

<section class="contact_section ">
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="">
                Contact Us
            </h2>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <div class="col-lg-7 col-md-6 px-0">
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Narephat,+Kathmandu,+Nepal"
                        width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 px-0">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    @auth
                    <!-- For logged-in users: show their info and hide name/email fields -->
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                    <div class="mb-3">
                        <p>You're submitting as: <strong>{{ Auth::user()->name }}</strong></p>
                    </div>
                    @else
                    <!-- For guests: show all fields -->
                    <div>
                        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required />
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    @endauth

                    <div>
                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required />
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <!-- Added margin class -->
                        <textarea name="message" class="message-box form-control" placeholder="Message" rows="5"
                            style="min-height: 120px; width: 100%; resize: vertical;">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <button type="submit">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<br><br><br>
<!-- end contact section -->
@endsection