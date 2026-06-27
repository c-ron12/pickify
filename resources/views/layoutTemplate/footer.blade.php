<!-- info section -->
<section class="info_section  layout_padding2-top">
    <div class="social_container">
        <div class="social_box">
            <a href="https://www.facebook.com/PickifyStore" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-facebook" aria-hidden="true" id="facebook"></i>
            </a>
            <a href="https://www.tiktok.com/@pickifystore12" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-tiktok" aria-hidden="true" id="tiktok"></i>
            </a>
            <a href="https://www.instagram.com/pickifystore12/" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-instagram" aria-hidden="true" id="instagram"></i>
            </a>
        </div>
    </div>
    <div class="info_container ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h6>
                        ABOUT US
                    </h6>
                    <p class="footerPara1">
                        Your favorite online store for trendy shoes and stylish clothing. We offer premium quality
                        fashion, unbeatable prices, and a seamless shopping experience—so you can step out in
                        confidence. Discover the latest trends, enjoy fast delivery, and exclusive deals just for you.
                        Shop now and elevate your wardrobe with effortless style!
                    </p>
                </div>

                <div class="col-md-4">
                    <h6 style="margin-bottom: 15px;">NEED HELP</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/faq') }}">FAQs</a></li>
                        <li><a href="{{ url('/track-order') }}">Track Your Order</a></li>
                        <li><a href="{{ url('/returns') }}">Returns & Exchanges</a></li>
                        <li><a href="{{ url('/shipping-info') }}">Shipping Information</a></li>
                        <li><a href="{{ url('/support') }}">Customer Support</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h6>
                        CONTACT US
                    </h6>
                    <div class="info_link-box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Narephat, Koteshwor-32, Kathmandu</span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+977-9824063524</span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>pickifystore12@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
                <p class="no-margin-bottom">copyright &copy; pickify.com | All right reserved 2025 | Deploved by c-ron12
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

</section>

<!-- end info section -->

{{-- <script src="{{ asset('/js/custom.js') }}"></script> --}}
<script src="js/jquery-3.4.1.min.js"></script>

<!-- jQuery (required for Toastr) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    @if(Session::has('toastr'))
    toastr.options.closeButton = true;
    toastr.options.timeOut = 2000;
    toastr.success("{{ Session::get('toastr') }}");
    @endif
</script>

<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script src="js/custom.js"></script>


</body>

</html>