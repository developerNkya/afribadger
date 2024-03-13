@include('partials.header')

	
<main>
    <div class="hero_in cart_modified">
        <div class="wrapper">
            <div class="container">          
            </div>
        </div>
    </div>
    <!--/hero_in-->
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="box_detail">
                    <br>
                    <div id="total_cart">
                        Congratulations!
                    </div>
                    <ul class="cart_details">
                        <p>You have successfully placed a booking for your next tour, our team will reach out to you as soon as possible</p>
                    </ul>
                    <button type="button" onclick="exploreTours()" class="btn_1 full-width purchase">Explore Tours</button>

                    <script>
                        function exploreTours() {
                            window.location.href = "/all-tours"; // Replace "/explore" with the desired URL
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>



@include('partials.footer')
