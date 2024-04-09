@include('partials.header')


@foreach ($tours as $tour)
    <main>
        <section class="hero_in tours_detail"
            style="background: url('{{ $tour->image_paths[0] }}') center center/cover no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>{{ $tour->name }}</h1>
                </div>
                <span class="magnific-gallery">
                    @foreach ($tour->image_paths as $index => $imagePath)
                        <a href="{{ $imagePath }}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View
                            photos</a>
                    @endforeach
                </span>
            </div>
        </section>


        <!--/hero_in-->



        <div class="bg_color_1">

            {{-- done --}}
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">
                            {{-- the toast messages --}}
                            @if (session()->has('message'))
                                {{-- <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div> --}}
                                <div id="myModal" class="modal fade">
                                    <div class="modal-dialog modal-dialog-centered modal-confirm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon-box">
                                                    <i class="material-icons">&#xE876;</i>
                                                </div>
                                                <h4 class="modal-title w-100">Awesome!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">Thank you for your rating!.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-success btn-block w-100"
                                                    id="okButton">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            @if ($error == 'The image paths field must be an array.')
                                                <li>Please upload at least one image.</li>
                                            @else
                                                <li>{{ $error }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <h2>Description</h2>
                            <p>{!! $tour->description !!}</p>
                            <hr>

                            <h3>Points></h3>
                            <p>
                                Below are some of the various exciting places that we will visit during this tour! Get
                                ready to embark on an adventure filled with unforgettable moments and lifelong memories!
                            </p>
                            <ul class="cbp_tmtimeline">
                                @foreach ($tours as $tour)
                                    @php
                                        $packages = json_decode($tour->packages);
                                        $packageIndex = 1; // Initialize package index
                                    @endphp
                                    @foreach ($packages as $package)
                                        @foreach ($package as $point => $description)
                                            <li>
                                                <time class="cbp_tmtime"
                                                    datetime="09:30"><span>Tour</span><span>Point</span></time>
                                                <div class="cbp_tmicon">
                                                    {{ $packageIndex }}
                                                </div>
                                                <div class="cbp_tmlabel">
                                                    <div class="hidden-xs">
                                                        <img src="https://i.ibb.co/SfykXxd/black-woman-zoologist-psd-transparent-white-isolated-background-873925-409026.jpg"
                                                            alt="" class="rounded-circle thumb_visit">
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <h4>{{ $point }}</h4>
                                                            <p>{{ $description }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            @php
                                                $packageIndex++; // Increment package index for the next point
                                            @endphp
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </ul>

                            <hr>
                            <hr>
                            <h3>Location</h3>

                            <div id="map" class="map map_single add_bottom_30">
                                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0" id="gmap_canvas"
                                    src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q={{ $tour->location }}&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <a href='https://www.easybooking.eu/'>Hotelsoftware Kleinbetriebe</a>
                                <script type='text/javascript'
                                    src='https://embedmaps.com/google-maps-authorization/script.js?id=ecf99973f46647f22b33e36df6e9746643bb7030'>
                                </script>
                            </div>

                            <!-- End Map -->
                        </section>
                        <!-- /section -->

                        <section id="reviews">
                            <h2>Reviews</h2>
                            <div class="reviews-container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="review_summary">
                                            <strong>8.5</strong>
                                            <em>Superb</em>
                                            <small>Based on 4 reviews</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <hr>

                            <div class="reviews-container">
                                @foreach ($ratings as $rating)
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb">
                                            <div class="review-image"></div>
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                @php
                                                    $ratingValue = (int) $rating['rating']; // Convert rating to integer
                                                    $ratingValue = max(0, min(5, $ratingValue)); // Ensure rating is between 0 and 5
                                                @endphp

                                                @for ($i = 0; $i < $ratingValue; $i++)
                                                    <i class="icon_star voted"></i>
                                                @endfor

                                                @for ($i = $ratingValue; $i < 5; $i++)
                                                    <i class="icon_star"></i>
                                                @endfor
                                            </div>

                                            <div class="rev-info">
                                                {{ $rating['created_at']->format('Y-m-d') }}
                                            </div>
                                            <div class="rev-text">
                                                <p>
                                                    {{ $rating['review'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- /review-container -->
                        </section>
                        <!-- /section -->
                        <hr>

                        <div class="add-review">
                            <h5>Leave a Review</h5>
                            <form action="/user_rating" method="POST">
                                @csrf <!-- CSRF protection -->

                                <!-- Hidden input field to store the tour ID -->
                                <input type="hidden" name="tour_id" value="{{ $tour->id }}">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name and Lastname *</label>
                                        <input type="text" name="name_review" id="name_review" placeholder=""
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email *</label>
                                        <input type="email" name="email_review" id="email_review"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rating </label>

                                        <div class="custom-select-form">
                                            <select name="rating_review" id="rating_review" class="wide">
                                                <option value="1">1 (lowest)</option>
                                                <option value="2">2</option>
                                                <option value="3" selected>3 (medium)</option>
                                                <option value="4">4</option>
                                                <option value="5">5 (highest)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Your Review</label>
                                        <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 add_top_20">
                                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">

                        <div class="box_detail booking">
                            <div class="price">
                                <span>{{ $tour->price }}$ <small>per person</small></span>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                            </div>
                            <div class="text-center" style="margin-top:8%"><small>Are you interested in this tour?
                                    come aboard and Book now to experience the amazing adventure of the
                                    {{ $tour->name }} Tour</small></div>

                            <a href="/bookingPage/ {{ $tour->id }}" class="btn_1 full-width purchase"
                                style="margin-top:3%">Book
                                Now!</a>

                        </div>
                        <ul style="display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); gap: 5px;padding-left:3%">
                            <li><a href="#0"><img src="{{asset('images/payments/western-union.png')}}" alt="PayPal Icon" style="width: 50px; height: 50px;"></a></li>
                            <li><a href="#0"><img src="{{asset('images/payments/wallet.png')}}" alt="PayPal Icon" style="width: 50px; height: 50px;"></a></li>
                            <li><a href="#0"><img src="https://i.ibb.co/ssYWkGD/atm-card.png" alt="PayPal Icon" style="width: 50px; height: 50px;"></a></li>
                        </ul>
                        
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@endforeach
<!--/main-->


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    // Wait for the document to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the success message exists
        @if (session()->has('message'))
            // Get the modal element by its ID
            var modal = document.getElementById('myModal');
            // Show the modal
            modal.classList.add('show');
            modal.style.display = 'block';
        @endif
    });

    //istening for okay button
    document.addEventListener('DOMContentLoaded', function() {
        // Get the OK button element
        var okButton = document.getElementById('okButton');

        // Add click event listener to the OK button
        okButton.addEventListener('click', function() {
            // Hide the modal
            var modal = document.getElementById('myModal');
            modal.classList.remove('show');
            modal.style.display = 'none';
        });
    });
</script>
@include('partials.footer')
