@extends('layoutTemplate.main')
@section('main-container')

<section class="client_section layout_padding" style="margin-top: 80px;">
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
<div class="testimonial-form-container">
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

<!-- end client section -->
@endsection