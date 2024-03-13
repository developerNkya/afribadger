@include('partials.header')
	

        <main>

            <section class="hero_in tours">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>EXPLORE ALL TOURS</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->


            <div class="collapse" id="collapseMap">
                <div id="map" class="map"></div>
            </div>
            <!-- End Map -->

            @include('alltours.tour_section')
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container margin_60_35">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#0" class="boxed_list">
                                <i class="pe-7s-help2"></i>
                                <h4>Need Help? Contact us</h4>
                            
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#0" class="boxed_list">
                                <i class="pe-7s-wallet"></i>
                                <h4>Payments</h4>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#0" class="boxed_list">
                                <i class="pe-7s-note2"></i>
                                <h4>Our Policy</h4>
                            </a>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->

        </main>
        <!--/main-->

         @include('partials.footer')