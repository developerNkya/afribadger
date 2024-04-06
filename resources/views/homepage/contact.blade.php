@include('partials.header')

<main>
    <section class="hero_in contacts contact_bg">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Contact Us</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    @foreach($user_info as $info)
    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <span>{{$info->address}}</span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email</h4>
                    <span>{{$info->email}}</span>

                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <span>
                     <img src="{{asset('images/payments/whatsapp.png')}}" alt="PayPal Icon" style="width: 20px; height: 20px;"> {{$info->phone_no}}
                    </span>

                </li>
            </ul>
        </div>
    </div>
    @endforeach

    <!--/contact_info-->

    <div class="bg_color_1 ">
        <div class="container margin_80_55">
            <div class="row justify-content-between">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="map_contact">
                        <!-- Content of your map -->
                    </div>
                    <!-- /map -->
                </div>
                
                <div class="col-lg-6"  id="send_message_section">
                    <h4>Send a message</h4>
                    <p>Got any feedback? We will be happy to hear from you!</p>
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

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="post" action="/save_contact" id="contactform" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" id="name_contact" name="name_contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input class="form-control" type="text" id="lastname_contact"
                                        name="lastname_contact">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" id="email_contact" name="email_contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label id="human_verification_label">Are you human? <span id="random_num_1"></span> + <span id="random_num_2"></span> =</label>
                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact">
                                </div>
                            </div>
                            
                        </div>
                        <p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded"
                                id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Function to generate random numbers and update the label
function generateRandomNumbers() {
    var num1 = Math.floor(Math.random() * 10); // Generate random number between 0 and 9
    var num2 = Math.floor(Math.random() * 10); // Generate random number between 0 and 9

    // Update label with random numbers
    $('#random_num_1').text(num1);
    $('#random_num_2').text(num2);

    // Store the correct answer in a data attribute
    $('#verify_contact').data('answer', num1 + num2);
}

// Function to validate the user's answer
function validateAnswer() {
    var userAnswer = parseInt($('#verify_contact').val());
    var correctAnswer = $('#verify_contact').data('answer');

    if (isNaN(userAnswer)) {
        alert('Please enter a valid number.');
        return false;
    }

    if (userAnswer !== correctAnswer) {
        alert('Incorrect answer. Please give the correct answer first');
        return false;
    }

    return true;
}

$(document).ready(function() {
    // Generate random numbers and update the label
    generateRandomNumbers();

    // Handle form submission
    $('#contactform').submit(function() {
        // Validate the user's answer before submitting the form
        return validateAnswer();
    });
});

$(document).ready(function() {
    // Function to scroll to the "Send a message" section
    function scrollToSendMessageSection() {
        var sendMessageSection = $('#send_message_section');
        if (sendMessageSection.length > 0) {
            $('html, body').animate({
                scrollTop: sendMessageSection.offset().top
            }, 'slow');
        }
    }

    // Scroll to the "Send a message" section if there are errors or success message
    if ($('.alert-danger').length > 0 || $('.alert-success').length > 0) {
        scrollToSendMessageSection();
    }
});

</script>


@include('partials.footer')
