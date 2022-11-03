<footer class="footer clearfix">
    <div class="container">
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="norc-phone"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Call us</h6>
                                    <p>{{ env('APP_Phone') }}</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="norc-mail"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Write to us</h6>
                                    <p>{{ env('App_Email') }}</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="norc-property-location"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Address</h6>
                                    <p>{{ env('APP_Address') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="row">
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">About {{ env('APP_NAME') }}.</h3>
                        <div class="widget-text">
                            <p>{{ env('APP_NAME') }} is a Company which is loved to build your dream home. <br>
                                Where You can live with your Loved Ons.
                            </p>
                            {{-- <div class="social-icons">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Branches</h3>
                        <ul>
                            <li>{{ env('APP_Branch1') }}</li>
                            <li>{{ env('APP_Branch2') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Sobha Developers</h3>

                        <ul>
                            <li><strong>1)</strong> Meydan site</li>
                            <li><strong>2)</strong> K.B.B.H Hotels</li>
                            <li><strong>3)</strong> Hart Land Schools</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">©2022 <a href="#">{{ env('APP_NAME') }}</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollIt.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/YouTubePopUp.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
