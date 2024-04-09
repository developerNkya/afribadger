@include('partials.header')

<main>

    @foreach ($details as $detail)
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp">{{ $detail->header}}</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Why Choose Camel Leon</h2>
                <p>Below include some of the vivid reasons for why you should choose us</p>
            </div>
            <div class="row">


                @foreach ($detail->reasons as $index => $reason)
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-medal"></i>
                        <h3>{{ $index + 1 }}</h3>
                        <p>
                            {{ $reason }}
                        </p>
                    </a>
                </div>
            @endforeach
            

            </div>
            <!--/row-->
        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Our Origins and Story</h2>
                    <p>Below include our short origin and story</p>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 wow position-relative" data-wow-offset="150">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="https://i.ibb.co/c2sBbV9/giau-tran-ZMd-Xvd6j-Gww-unsplash.jpg" class="img-fluid"
                                alt="">
                        </figure>
                    </div>
                    <div class="col-lg-5">
                        <p>{{ $detail->history }}</p>

                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </div>
        <!--/bg_color_1-->

        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our founders</h2>
                <p>Below incude the core founders of camel leon</p>
            </div>
            <div id="carousel" class="owl-carousel owl-theme">

                @foreach ($detail->founders as $founder)
                <div class="item">
                    <a href="#0">
                        <div class="title">
                            <h4>{{ $founder['name'] }}<em>{{ $founder['title'] }}</em></h4>
                        </div>
                        <img src="{{ asset('storage/' . $founder['image_path']) }}" alt="{{ $founder['name'] }}">
                    </a>
                </div>
            @endforeach
            
            </div>
            <!-- /carousel -->
        </div>
        <!--/container-->
    @endforeach
</main>

@include('partials.footer')
