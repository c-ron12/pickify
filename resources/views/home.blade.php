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
                                        Welcome To Our <br>
                                        Gift Shop
                                    </h1>
                                    <p>
                                        Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non
                                        necessitatibus error distinctio mollitia
                                        suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores
                                        aliquid repellat beatae cum,
                                        perspiciatis enim, accusantium perferendis.
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
                        <img src="images/database_img/{{$item->image}}" alt="" style="height: 250px;">
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
            <a href="{{ url('shop') }}">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- end shop section -->

<!-- why section -->
<section class="why_section layout_padding" style="padding-bottom: 0;">
    <div class="container" id="whyUs_container" style="padding-top: 0;">
        <div class="heading_container heading_center whyUs" style="margin-top: 0;">
            <h2>
                Why Shop With Us
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box ">
                    <div class="img-box">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                 V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                 c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                 c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                 c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                 c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                 s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                 c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                 h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                 s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                 c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                 c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                 c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                  M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                 l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                 c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                 s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                 c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                 c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                 c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                 c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                 C281.901,181.576,281.901,176.501,278.771,173.37z" />
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Fast Delivery
                        </h5>
                        <p>
                            We make sure your order reaches you quickly, so you never have to wait long to enjoy your
                            favorite styles.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box ">
                    <div class="img-box">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667"
                            style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667
                 v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667
                 S123.221,234.667,117.333,234.667z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
                 S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
                 S368.853,469.333,245.333,469.333z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989
                 c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011
                 s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347
                 C389.717,143.296,390.443,136.576,386.752,131.989z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005
                 s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083
                 c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333
                 c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667
                 S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136
                 c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667
                 s-4.8,10.667-10.667,10.667H192z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667
                 c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                 S315.221,277.333,309.333,277.333z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288
                 c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352
                 c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                 S400.555,277.333,394.667,277.333z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333
                 c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Best Quality
                        </h5>
                        <p>
                            We offer only the finest shoes and clothing, carefully selected to give you comfort,
                            durability, and style.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box ">
                    <div class="img-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <g stroke="currentColor" stroke-width="20" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <!-- Truck Body -->
                                <path
                                    d="M120 320H80c-8.8 0-16-7.2-16-16V160c0-8.8 7.2-16 16-16h256c8.8 0 16 7.2 16 16v32h80l40 80v64c0 8.8-7.2 16-16 16h-40" />

                                <!-- Truck Cabin -->
                                <path d="M336 176h96v96" />

                                <!-- Wheels -->
                                <circle cx="136" cy="360" r="32" />
                                <circle cx="376" cy="360" r="32" />

                                <!-- Cargo Area Details -->
                                <path d="M80 176h256v128H80z" />

                                <!-- Price Tag Symbol -->
                                <path d="M256 120v-40M216 80h80M296 120v-40" />
                            </g>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Reasonable Delivery Rate
                        </h5>
                        <p>
                            Our delivery charges are fair and pocket-friendly—making shopping easier for everyone.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- end why us section -->

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