@if(empty($setting))
    @php $setting = \App\Models\Settings::first(); @endphp
@endif

<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Get in Touch</h3>
                    <div class="contact-info">
                        @if($setting->address)
                        <p><i class="fa fa-map-marker"></i>{{$setting->address}}</p>
                        @endif
                            @if($setting->email)
                        <p><i class="fa fa-envelope"></i>{{$setting->email}}</p>
                            @endif
                            @if($setting->phone)
                        <p><i class="fa fa-phone"></i>{{$setting->phone}}</p>
                            @endif
                        <div class="social">
                            @if($setting->twitter)
                            <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                            @endif
                                @if($setting->facebook)
                            <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if($setting->linkedin)
                            <a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                @endif

                                @if($setting->instagram)
                            <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if($setting->youtube)
                            <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Useful Links</h3>
                    <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Pellentesque</a></li>
                        <li><a href="#">Aenean vulputate</a></li>
                        <li><a href="#">Vestibulum sit amet</a></li>
                        <li><a href="#">Nam dignissim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Pellentesque</a></li>
                        <li><a href="#">Aenean vulputate</a></li>
                        <li><a href="#">Vestibulum sit amet</a></li>
                        <li><a href="#">Nam dignissim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Newsletter</h3>
                    <div class="newsletter">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu
                        </p>
                        <form>
                            <input class="form-control" type="email" placeholder="Your email here">
                            <button class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Menu Start -->
<div class="footer-menu">
    <div class="container">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <a href="">Cookies</a>
            <a href="">Accessibility help</a>
            <a href="">Advertise with us</a>
            <a href="">Contact us</a>
        </div>
    </div>
</div>
<!-- Footer Menu End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("assets")}}/lib/easing/easing.min.js"></script>
<script src="{{asset("assets")}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset("assets")}}/js/main.js"></script>
