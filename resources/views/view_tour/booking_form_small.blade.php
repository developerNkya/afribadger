 <div class="v653_3174">
    <form id="bookingForm-s" action="/book-tour" method="POST">
        @csrf
        <button class="close-btn" onclick="closeModal(event)">×</button>
        <span class="v653_3175">Book your Tour</span>
        <div class="v653_3176">
            <div class="v653_3177">
                <span class="v653_3178">Your name*</span>
                <div class="v653_3179"></div>
                <input type="text" id="name" name="name" class="v653_3180" placeholder="Name" required>
            </div>
            <input type="text" id="tour_id" name="tour_id" class="v653_3180" value="{{$tour->id}}" style="visibility: hidden;">


            <div class="v653_3177 email-small-form">
                <span class="v653_3178">Your Email*</span>
                <div class="v653_3179"></div>
                <input type="email" id="email" name="email" class="v653_3180" placeholder="Email" required>
            </div>

            <div class="v653_3177" style="margin-top:6%">
                <span class="v653_3178">Your phone*</span>
                <div class="v653_3179"></div>
                <input type="phone" id="phone" name="phone" class="v653_3180" placeholder="Phone (International version)" required>
            </div>

            <div class="v653_3189">
                <span class="v653_3190">Your request*</span>
                <div class="v653_3191"></div>
                <textarea name="request" class="v653_3192" id="request" placeholder="Please let us know if you have any question"></textarea>
            </div>
            <div class="v653_3193" style="left:-20px">
                <label class="v653_3194">
                    <input type="radio" name="preference" value="email">
                    <span class="v653_3195">I prefer email</span>
                </label>
                <label class="v653_3194 radio-whatsapp" style="left:100px">
                    <input type="radio" name="preference" value="whatsapp">
                    <span class="v653_3195">I prefer WhatsApp</span>
                </label>
                <label class="v653_3194 radio-calls" style="left:-49px;top:40px">
                    <input type="radio" name="preference" value="calls">
                    <span class="v653_3195">I prefer calls</span>
                </label>
            </div>
            <div class="name"></div>

            <div class=" book-btn v653_3193" style="margin-top:120px;left:-20px">
            <div class="wp-block-yotako-block-anchor button_af56c63f62ed">
                    <a id="bookNowLink-s" class="button_link_af56c63f62ed" target="_self" rel="noopener">
                        <p class="text_75221008a7fc has-text-color has-background has-text-align-left" style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#ffffff;background-color:transparent;">
                            Book Now
                        </p>
                        <figure class="imageview_6f8f09ff716d wp-block-image">
                            <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I422:4536;421:4525;392:590.svg" />
                        </figure>
                        <!-- Loader inside the button -->
                        <div id="loader-s" style="
     display: none;
    position: absolute;
    margin-top: 5%;
    margin-left: 60%;
    transform: translate(-50%, -50%);">
                            <div class="spinner"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
    const bookNowLink = document.getElementById('bookNowLink-s');
    const bookingForm = document.getElementById('bookingForm-s');
    const loader = document.getElementById('loader-s');

    bookNowLink.addEventListener('click', function (e) {
        e.preventDefault();

        // Disable the button
        bookNowLink.style.pointerEvents = 'none';
        bookNowLink.style.opacity = '0.7';

        // Show the loader
        loader.style.display = 'block';

        // Submit the form via AJAX
        fetch(bookingForm.action, {
    method: 'POST',
    body: new FormData(bookingForm),
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
    }
})
.then(response => response.json())
.then(data => {
    if (data.status === 'success') {
        toastr.success(data.message); // Show success toast
        bookingForm.reset(); // Reset the form
    } else if (data.errors) {
        // Display validation errors
        for (const field in data.errors) {
            toastr.error(data.errors[field][0]); // Show the first error for each field
        }
    } else {
        toastr.error(data.message); // Show generic error toast
    }
})
.catch(error => {
    toastr.error('An error occurred. Please try again.'); // Show generic error toast
})
        .finally(() => {
            // Hide the loader
            loader.style.display = 'none';

            // Re-enable the button
            bookNowLink.style.pointerEvents = 'auto';
            bookNowLink.style.opacity = '1';
        });
    });
});
</script> -->