<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 pe-5">
                <p class="logo_normal"></p>
                <p>Experience the essence of wisdom with our carefully selected destinations, each offering a unique perspective on life's fundamental questions. Delve into the meaning of existence as we guide you through captivating landmarks and thought-provoking discussions.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li>Contacts</li><br>
                        <li style="font-size:15px"><a href="#0"><img src="{{asset('images/payments/whatsapp.png')}}" alt="PayPal Icon" style="width: 20px; height: 20px;"></a> +44 7831 808 250(United-Kingdom)</li>
                        <li style="font-size:15px"><a href="#0"><img src="{{asset('images/payments/whatsapp.png')}}" alt="PayPal Icon" style="width: 20px; height: 20px;"></a> +49 1573 041 6621(Germany)</li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/all-tours">Tours</a></li>
                    <li><a href="/contact_us">Contact Us</a></li>
                </ul>
            </div>

        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select" id="currency-selector">
                            <select>
                                <option value="US Dollars" selected>US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    {{-- <li><img src="images/img1/cards_all.svg" alt=""></li> --}}
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="/faqs">FAQS</a></li>
                    <li><span>© Camel Leon</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
</div>
<!-- page -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-start">
                    <label class="container_check">Remember me
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Don’t have an account? <a href="register.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="/js/js1/common_scripts.js"></script>
<script src="/js/js1/main.js"></script>
{{-- <script src="phpmailer/validate.js"></script> --}}

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="/css/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/css/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/css/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
        var tpj=jQuery;
        
        var revapi44;
        tpj(document).ready(function() {
             if (tpj("#rev_slider_44").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_44");
    } else {
        revapi44 = tpj("#rev_slider_44").show().revolution({
            sliderType: "standard",
            jsFileLocation: "css/revolution-slider/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 4500,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    touchOnDesktop: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'erinyen',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 767,
                    hide_over: 9999,
                    hide_delay: 0,
                    hide_delay_mobile: 0,

                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    },

                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    style: 'zeus',
                    direction: 'horizontal',
                    rtl: false,

                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 30,
                    space: 7,

                    hide_onleave: false,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_over: 767,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
                },
            },
            responsiveLevels: [1240, 1025, 778, 480],
            visibilityLevels: [1920, 1500, 1025, 768],
            gridwidth: [1200, 991, 778, 480],
            gridheight: [1025, 1366, 1025, 868],
            lazyType: "none",
            shadow: 0,
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "on",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLimit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
            }
        });
</script>


</body>



{{-- handles movement of the slider down --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('.rs-btn.btn_1');

    button.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default behavior of the link

        // Get the target element by ID
        var targetElement = document.getElementById('categories_section');

        // Scroll to the target element
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

            // Scroll to the top of the page on refresh
            window.onload = function() {
    window.scrollTo(0, 0);
};
});
</script>
<!-- Mirrored from www.ansonika.com/Camel Leon/index-11.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 15:01:43 GMT -->
</html>