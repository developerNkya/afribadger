@include('partials.header')

<main>

    <div class="hero_in cart_modified">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix">
                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Fill Details</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Then</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Finish!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
        </div>
    </div>
    <!--/hero_in-->

    <div class="bg_color_1">
        <form id="booking_form" method="POST" action="/saveBooking">
            @csrf
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box_cart">
                            <div class="message">
                                <p>Proceed with providing your details so as our team can reach out to you!</p>
                            </div>
                                                    <!-- Display validation errors -->
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
                            <div class="form_title">
                                <h3><strong>1</strong>Your Details</h3>
                                <p>
                                    Proceed with filling your personal information
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">

                                            <input type="text" class="form-control" id="tour_id" name="tour_id" value="{{$tour_id}}" style="visibility: hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id="email_booking" name="email_booking" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Expected trip date</label>
                                            <input type="date" id="expected_trip_date" name="expected_trip_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="number_of_travelers">Number of Travelers</label><br>
                                            <input type="radio" id="single_person" name="num_travelers" value="single" checked>
                                            <label for="single_person">Single Person</label>
                                            <input type="radio" id="multiple_people" name="num_travelers" value="multiple">
                                            <label for="multiple_people">Multiple People</label><br>
                                            <input type="number" id="number_of_travelers" name="number_of_travelers" class="form-control" style="margin-top: 10px;" placeholder="Enter number of travelers" disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Number Of Children</label><br>
                                            <label style="color: grey">(Can be left blank if there are no children)</label><br>
                                            <input type="text" id="no_of_children" name="no_of_children" class="form-control" style="margin-top: 3%">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End step -->
                            <div id="policy" style="margin-top: 10%">
                                <h5>Cancellation policy</h5>
                                <p class="nomargin">Our commitment to providing a seamless experience extends to our flexible rescheduling assurance. We understand that plans can change unexpectedly, which is why we offer a comprehensive cancellation policy designed to accommodate your needs. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail">
                            <div id="total_cart">
                                Tour Price <span class="float-end">{{$price}}</span>
                            </div>
                            <ul class="cart_details">
                                <p>Entered information will be used by our team to reach out to you for further arrangements and scheduling of the tour</p>
                            </ul>
                            <button type="submit" class="btn_1 full-width purchase">Complete Booking</button>
                            <div class="text-center"><small>No money charged in this step</small></div>
                        </div>
                    </aside>
                </div>
                <!-- /row -->
            </div>
        </form>
        
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->




</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[type=radio][name=num_travelers]').change(function() {
            if (this.value === 'multiple') {
                $('#number_of_travelers').prop('disabled', false);
            } else {
                $('#number_of_travelers').prop('disabled', true);
            }
        });
    });
</script>


@include('partials.footer')
